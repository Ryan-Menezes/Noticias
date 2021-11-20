<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
	public $table = 'users';
	protected $fillable = ['name', 'email', 'password'];
	public $timestamps = true;

	public function getRolesCreateAttribute(){
		return [
			'name' 		=> 'required|min:1|max:100',
			'email' 	=> "required|email|unique:{$this->table},email",
			'password' 	=> 'required|min:8|max:100',
			'role'		=> 'required'
		];
	}

	public function getRolesUpdateAttribute(){
		return [
			'name' 		=> 'required|min:1|max:100',
			'email' 	=> "required|email|unique:{$this->table},email,{$this->email}",
			'password' 	=> 'min:8|max:100',
			'role'		=> 'required'
		];
	}

	public function getCreatedAtFormatAttribute(){
		if(empty($this->created_at))
			return null;

		return date('d/m/Y H:i:s', strtotime($this->created_at));
	}

	public function getUpdatedAtFormatAttribute(){
		if(empty($this->updated_at))
			return null;

		return date('d/m/Y H:i:s', strtotime($this->updated_at));
	}

	public function scopeSearch($query, $page = 0, $filter = ''){
		$limit = config('paginate.limit');
		$page = ($page - 1) * $limit;

		return $query
					->orWhere('name', 'LIKE', "%{$filter}%")
					->orWhere('email', 'LIKE', "%{$filter}%")
					->offset($page)
					->limit($limit)
					->get();
	}

	public function roles(){
		return $this->belongsToMany(Role::class, 'users_roles');
	}

	public function notices(){
		return $this->hasMany(Notice::class);
	}

	public function can(string $permission) : bool{
		foreach($this->roles as $role){
			foreach($role->permissions as $perm){
				if($perm->name == $permission)
					return true;
			}
		}

		return false;
	}

	public function verifyPermission(string $permission){
		if(!can($permission)){
			abort(404);
		}
	}
}