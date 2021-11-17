<?php
namespace Src\Classes;

use App\Models\User;

class Auth{
	/** @var string */
	private const NAMESESSION = 'auth';

	/**
	  * Method that validates a login
	  * 
	  * @param string
	  * @param string
	  *
	  * @return bool
	  */
	public static function check(string $email, string $password) : bool{
		$user = User::where('email', $email)->first();

		if(is_null($user)) 
			return false;

		if(!password_verify($password, $user->password)) 
			return false;

		session(self::NAMESESSION, ['user' => $user]);
		return true;
	}

	/**
	  * Method returns logged user
	  *
	  * @return /App/Models/User|null
	  */
	public static function user() : ?User{
		if(!session()->has(self::NAMESESSION))
			return null;

		$auth = session(self::NAMESESSION);

		if(!array_key_exists('user', $auth))
			return null;

		return $auth['user'];
	}

	/**
	  * Method checks if there is any user logged in
	  *
	  * @return bool
	  */
	public static function hasAuthenticate() : bool{
		return !is_null(self::user());
	}

	/**
	  * Logout method
	  *
	  * @return void
	  */
	public static function logout() : void{
		session()->remove(self::NAMESESSION);
	}
}