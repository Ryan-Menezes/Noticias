<?php
namespace App\Controllers\Site;

use Src\Classes\{
	Request,
	Controller
};

class SiteController extends Controller{
	public function index(){
		return view('site.index');
	}
}