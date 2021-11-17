<?php
namespace App\Controllers\Panel;

use Src\Classes\{
	Request,
	Controller
};
use Src\Classes\Auth;

class AuthController extends Controller{
	public function index(){
		return view('panel.auth.index');
	}

	public function login(){
		$request = new Request();
		$data = $request->all();
		
		$this->validator($data, [
			'email' 	=> 'required|email',
			'password' 	=> 'required'
		]);

		if(Auth::check($data['email'], $data['password'])){
			redirect(route('panel'));
		}

		redirect(route('panel.login'), ['error' => 'E-Mail ou Senha Incorretos!']);
	}

	public function logout(){
		Auth::logout();

		redirect(route('panel.login'));
	}
}