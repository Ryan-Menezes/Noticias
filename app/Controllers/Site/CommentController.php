<?php
namespace App\Controllers\Site;

use Src\Classes\{
	Request,
	Controller
};
use App\Models\{
	Notice,
	Comment,
	Role
};

class CommentController extends Controller{
	private $notice;
	private $comment;

	public function __construct(){
		$this->notice = new Notice();
		$this->comment = new Comment();
	}

	public function store($slug){
		$notice = $this->notice->where('slug', $slug)->firstOrFail();

		$request = new Request();
		$data = $request->all();

		$this->validator($data, $this->comment->rolesCreate, $this->comment->messages);

		if($notice->comments()->create($data)){
			redirect(route('site.notices.show', ['slug' => $notice->slug]), ['success' => 'Comentário enviado com sucesso']);
		}

		redirect(route('site.notices.show', ['slug' => $notice->slug]), ['error' => 'Comentário NÃO enviado, Ocorreu um erro no processo de envio!']);
	}
}