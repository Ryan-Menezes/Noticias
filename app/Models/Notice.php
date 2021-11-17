<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model{
	public $table = 'notices';
	protected $fillable = ['title', 'slug', 'tags', 'visible', 'visit', 'description', 'content', 'poster', 'user_id'];
	public $timestamps = true;

	public function getRolesCreateAttribute(){
		return [
			'title' 		=> 'required|min:1|max:191',
			'description' 	=> 'required',
			'content' 		=> 'required'
		];
	}

	public function getRolesUpdateAttribute(){
		return [
			'title' 		=> 'required|min:1|max:191',
			'description' 	=> 'required',
			'content' 		=> 'required'
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
					->orWhere('title', 'LIKE', "%{$filter}%")
					->orWhere('slug', 'LIKE', "%{$filter}%")
					->orWhere('tags', 'LIKE', "%{$filter}%")
					->orWhere('description', 'LIKE', "%{$filter}%")
					->orWhere('content', 'LIKE', "%{$filter}%")
					->offset($page)
					->limit($limit)
					->get();
	}

	public function verifyPermission(string $permission){
		if(!can($permission)){
			abort(404);
		}
	}

	public function author(){
		return $this->belongsTo(User::class);
	}

	public function categories(){
		return $this->belongsToMany(Category::class, 'notices_categories');
	}
}