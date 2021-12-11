<?php
namespace App\Controllers\Site;

use Src\Classes\{
	Request,
	Controller
};
use App\Models\{
	Notice,
	Comment,
	SubComment,
	Role
};

class CommentController extends Controller{
	private $notice;
	private $comment;
	private $subcomment;

	public function __construct(){
		$this->notice = new Notice();
		$this->comment = new Comment();
		$this->subcomment = new SubComment();
	}

	public function store($slug){
		$notice = $this->notice->where('slug', $slug)->firstOrFail();

		$request = new Request();
		$data = $request->all();

		$this->validator($data, $this->comment->rolesCreate, $this->comment->messages);

		if($notice->comments()->create($data)){
			redirect(route('site.notices.show', ['slug' => $notice->slug]) . '#commentsarea', ['success' => 'Comentário enviado com sucesso']);
		}

		redirect(route('site.notices.show', ['slug' => $notice->slug]) . '#commentsarea', ['error' => 'Comentário NÃO enviado, Ocorreu um erro no processo de envio!']);
	}

	public function response($slug, $id){
		$notice = $this->notice->where('slug', $slug)->firstOrFail();
		$comment = $notice->comments()->findOrFail($id);

		$request = new Request();
		$data = $request->all();

		$this->validator($data, $this->subcomment->rolesCreate, $this->subcomment->messages);

		if($comment->subcomments()->create($data)){
			redirect(route('site.notices.show', ['slug' => $notice->slug]) . '#commentsarea', ['success' => 'Resposta enviada com sucesso']);
		}

		redirect(route('site.notices.show', ['slug' => $notice->slug]) . '#commentsarea', ['error' => 'Resposta NÃO enviada, Ocorreu um erro no processo de envio!']);
	}
}