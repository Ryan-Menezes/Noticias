<?php
namespace App\Controllers\Site;

use Src\Classes\{
	Request,
	Controller
};
use App\Models\Notice;

class SiteMapController extends Controller{
	private $sitemap;
	private $sitemapImages;

	public function __construct(){
		$urls = config('sitemap.urls');
		foreach(Notice::all() as $notice){
			array_push($urls, [
				'loc' => route('site.notices.show', ['slug' => $notice->slug]),
				'changefreq' => 'weekly',
            	'priority' => '0.80'
			]);
		}

		$this->sitemap = sitemap($urls, false);
		$this->sitemapImages = sitemapImages(false);
	}

	public function index(){
		header('Content-Type: application/xml');

		return $this->sitemap;
	}

	public function images(){
		header('Content-Type: application/xml');

		return $this->sitemapImages;
	}
}