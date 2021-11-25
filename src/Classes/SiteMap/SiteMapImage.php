<?php
namespace Src\Classes\SiteMap;

class SiteMapImage{
    /** @var string */
    private $location;

    /** @var array */
    private $urls;

    public function __construct(string $location){
        $this->location = $location;
        $this->urls = [];
    }

    /**
     * Add a url to the sitemap
     * 
     * @param string
     * @param string
     * 
     * return \Src\Classes\SiteMap\SiteMap
     */
    public function addUrl(string $loc, string $image_loc, string $image_caption, string $image_geo_location, string $image_title) : SiteMapImage{
        array_push($this->urls, [
            'image:image' => [
                'image:loc'             => $image_loc,
                'image:caption'         => $image_caption,
                'image:geo_location'    => $image_geo_location,
                'image:title'           => $image_title
            ]
        ]);

        return $this;
    }

    /**
     * Generate the sitemap file
     * 
     * @param string
     * 
     * return void
     */
    public function generate(string $filename) : void{
        $filename = dirname(__DIR__, 3) . '/' . trim($filename, '/');

        $xml  = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">';
        $xml .= '<url>';
        $xml .= "<loc>{$this->location}</loc>";

        foreach($this->urls as $url){
            foreach($url as $key => $value){
                $xml .= "<{$key}>";
                
                foreach($value as $tag => $val){
                    $xml .= "<{$tag}>{$val}</{$tag}>";
                }
                
                $xml .= "</{$key}>";
            }
        }

        $xml .= '</url>';
        $xml .= '</urlset>';
        
        file_put_contents($filename, $xml);
    }
}