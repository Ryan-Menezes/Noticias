<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model{
	public $table = 'categories';
	protected $fillable = ['name', 'slug'];
	public $timestamps = false;

	public function getRolesCreateAttribute(){
		return [
			'name' 	=> "required|min:1|max:100|unique:{$this->table},name"
		];
	}

	public function getRolesUpdateAttribute(){
		return [
			'name' 	=> "required|min:1|max:100|unique:{$this->table},name,{$this->name}"
		];
	}

	public function scopeSearch($query, $page = 0, $filter = ''){
		$limit = config('paginate.limit');
		$page = ($page - 1) * $limit;

		return $query
					->orWhere('name', 'LIKE', "%{$filter}%")
					->offset($page)
					->limit($limit)
					->get();
	}

	public function verifyPermission(string $permission){
		if(!can($permission)){
			abort(404);
		}
	}

	public function notices(){
		return $this->belongsToMany(Notice::class, 'notices_categories');
	}
}