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

class CategoryController extends Controller{
	private $category;

	public function __construct(){
		$this->category = new Category();
	}

	public function show($slug){
		$category = $this->category->where('slug', $slug)->firstOrFail();
		$categories = $this->category->all();
		$notices = $category->notices;

		if(count($notices) == 0){
			abort(404);
		}

		return view('site.notices.index', compact('notices', 'categories', 'category'));
	}
}