<?php
namespace App\Controllers\Panel;

use Src\Classes\{
	Request,
	Controller
};
use App\Models\{
	User,
	Notice,
	Comment,
	SubComment,
	Category,
	Role,
	Permission
};

class PanelController extends Controller{
	public function index(){
		/*
		$actions = ['view', 'create', 'edit', 'delete'];
		$tables = ['users', 'notices', 'categories', 'roles', 'permissions', 'comments'];

		foreach($tables as $table){
			foreach($actions as $action){
				Permission::create([
					'name' => "{$action}.{$table}",
					'description' => "{$action}.{$table}"
				]);
			}
		}
		*/

		$data = [
			'usersCount' => User::count(),
			'noticesCount' => Notice::count(),
			'commentsCount' => Comment::count() + SubComment::count(),
			'categoriesCount' => Category::count(),
			'rolesCount' => Role::count(),
			'permissionsCount' => Permission::count()
		];

		return view('panel.index', $data);
	}
}