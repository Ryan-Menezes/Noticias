<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model{
	public $table = 'roles';
	protected $fillable = ['name', 'description'];
	public $timestamps = false;

	public function getRolesCreateAttribute(){
		return [
			'name' 			=> 'required|min:1|max:100',
			'description' 	=> 'required'
		];
	}

	public function getRolesUpdateAttribute(){
		return [
			'name' 			=> 'required|min:1|max:100',
			'description' 	=> 'required'
		];
	}

	public function scopeSearch($query, $page = 0, $filter = ''){
		$limit = config('paginate.limit');
		$page = ($page - 1) * $limit;

		return $query
					->orWhere('name', 'LIKE', "%{$filter}%")
					->orWhere('description', 'LIKE', "%{$filter}%")
					->offset($page)
					->limit($limit)
					->get();
	}

	public function permissions(){
		return $this->belongsToMany(Permission::class, 'roles_permissions');
	}

	public function verifyPermission(string $permission){
		if(!can($permission)){
			abort(404);
		}
	}
}