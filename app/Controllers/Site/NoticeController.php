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
		$request = new Request();

		$page = $request->input('page') ?? 1;
		$pages = ceil($this->notice->count() / config('paginate.limit'));

		$notices = $this->notice->search($page);
		$categories = Category::all();

		if(count($notices) == 0) abort(404);

		return view('site.notices.index', compact('notices', 'categories', 'pages'));
	}

	public function show($slug){
		$notice = $this->notice->where('slug', $slug)->firstOrFail();
		$categories = Category::all();

		return view('site.notices.show', compact('notice', 'categories'));
	}
}