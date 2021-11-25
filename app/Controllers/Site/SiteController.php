<?php
namespace App\Controllers\Site;

use Src\Classes\{
	Request,
	Controller
};
use App\Models\{
	Notice,
	Category
};

class SiteController extends Controller{
	public function __construct(){
		$urls = config('sitemap.urls');
		foreach(Notice::all() as $notice){
			array_push($urls, [
				'loc' => route('site.notices.show', ['slug' => $notice->slug]),
            	'priority' => '0.80'
			]);
		}

		sitemap(config('sitemap.filename'), $urls);
	}
	
	public function index(){
		$notices = Notice::where('visible', true)->orderBy('id', 'DESC')->get();
		$categories = Category::all();

		return view('site.index', compact('notices', 'categories'));
	}
}