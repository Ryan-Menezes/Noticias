<?php
namespace App\Controllers\Site;

use Src\Classes\{
	Request,
	Controller
};
use App\Models\Notice;

class SiteController extends Controller{
	public function index(){
		$notices = Notice::orderBy('updated_at', 'DESC')->get();

		return view('site.index', compact('notices'));
	}
}