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

class NoticeController extends Controller{
	private $notice;

	public function __construct(){
		$this->notice = new Notice();
	}

	public function index(){
		$notices = $this->notice->all();
		$categories = Category::all();

		return view('site.notices.index', compact('notices', 'categories'));
	}

	public function show($slug){
		$notice = $this->notice->where('slug', $slug)->firstOrFail();
		$categories = Category::all();

		return view('site.notices.show', compact('notice', 'categories'));
	}
}