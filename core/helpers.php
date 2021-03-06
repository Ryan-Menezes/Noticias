<?php
use Src\Classes\{
	Web,
	Route,
	View,
	Session,
	Validator,
	Auth
};
use Src\Classes\SiteMap\{
	SiteMap,
	SiteMapImage
};

if(!function_exists('config')){
	function config(string $config){
		$config = explode('.', $config);

		if(count($config) > 1){
			$file = $config[0];

			$values = include __DIR__ . '/../config/' . $file . '.php';

			for($i = 1; $i < count($config); $i++){
				$key = $config[$i];

				if(is_array($values) && array_key_exists($key, $values)){
					$values = $values[$key];
				}
			}	

			return $values;
		}else if(count($config) === 1){
			$file = $config[0];
			return include __DIR__ . '/../config/' . $file . '.php';
		}

		return null;
	}
}

if(!function_exists('view')){
	function view(string $file, array $parameters = []) : string{
		$v = __DIR__ . '/../' . trim(config('view.dir'), '/');
		$c = __DIR__ . '/../' . trim(config('view.cache'), '/');

		$view = new View($v, $c);

		return $view->render($file, $parameters);
	}
}

if(!function_exists('redirect')){
	function redirect(string $url, array $parameters = []) : void{
		$v = __DIR__ . '/../' . trim(config('view.dir'), '/');
		$c = __DIR__ . '/../' . trim(config('view.cache'), '/');

		$view = new View($v, $c);

		$view->redirect($url, $parameters);
	}
}

if(!function_exists('url')){
	function url(string $route = null) : string{
		$url = trim(config('app.url'), '/');
		$route = trim($route, '/');

		return str_ireplace("\\", '/', $url . '/' . $route);
	}
}

if(!function_exists('public_path')){
	function public_path(string $route = null) : string{
		return url('public/' . trim($route, '/'));
	}
}

if(!function_exists('route')){
	function route(?string $name = null, array $parameters = []){
		if(!is_null($name)  && mb_strlen($name) > 0){
			$routes = Route::getRoutes();

			foreach($routes as $rou){
				if(!empty($rou['name']) && $rou['name'] === $name){
					if(!is_null($rou['prefix']))
						$rou['route'] = $rou['prefix'] . '/' . $rou['route'];

					$parts = explode('/', trim($rou['route'], '/'));

					for($i = 0; $i < count($parts); $i++){
						$part = $parts[$i];
						$key = str_replace(['{', '}'], ['', ''], $part);

						if(isset($parameters[$key]) && $part[0] == '{' && $part[mb_strlen($part) - 1] == '}'){
							$parts[$i] = $parameters[$key];
						}
					}

					$parts = str_replace(['{', '}'], ['', ''], implode('/', $parts));

					return url($parts);
				}
			}

			return null;
		}

		return Web::getRoute();
	}
}

if(!function_exists('dd')){
	function dd($value) : string{
		echo '<pre>';
		print_r($value);
		die();
		echo '</pre>';
	}
}

if(!function_exists('session')){
	function session($key = null, $value = null){
		if(!is_null($key) && is_null($value))
			return Session::get($key);

		if(!is_null($key) && !is_null($value))
			return Session::set($key, $value);

		return new Session();
	}
}

if(!function_exists('validator')){
	function validator(array $data, array $roles, array $messages = []) : array{
		Validator::make($data, $roles, $messages);

		return Validator::errors();
	}
}

if(!function_exists('auth')){
	function auth() : Auth{
		return new Auth();
	}
}

if(!function_exists('can')){
	function can(string $permission) : bool{
		if(auth()->hasAuthenticate()){
			return auth()->user()->can($permission);
		}
		
		return false;
	}
}

if(!function_exists('abort')){
	function abort(int $code, ?string $message = null) : void{
		if(is_null($message)){
			$message = config("server.error.{$code}");

			if(!is_string($message))
				$message = null;
		}

		require __DIR__ . '/../storage/framework/views/error.php';
		die();
	}
}

if(!function_exists('sitemap')){
	function sitemap(array $urls, bool $generateFile = true) : string{
		$filename = config('sitemap.filename');
		$sitemap = new SiteMap();

		foreach($urls as $url){
			if(array_key_exists('loc', $url) && array_key_exists('changefreq', $url) && array_key_exists('priority', $url) && !in_array('', $url)){
				$sitemap->addUrl($url['loc'],  $url['changefreq'], $url['priority']);
			}
		}

		if($generateFile)
			$sitemap->generate($filename);

		return $sitemap->xml();
	}
}

if(!function_exists('sitemapImages')){
	function sitemapImages(bool $generateFile = true) : string{
		$filename = config('sitemap.images.filename');
		$directories = config('sitemap.images.directories');
		$global = dirname(__DIR__, 1);
		$sitemap = new SiteMapImage(url());
		$extensions = [
			'jpg',
			'jpeg',
			'png',
			'gif',
			'bmp',
			'svg',
			'psd',
			'tiff',
			'raw',
			'webp',
			'exif'	
		];

		foreach($directories as $directory){
			$dir = $global . '/' . trim($directory, '/');

			if(is_dir($dir)){
				foreach(scandir($dir) as $d){
					if(in_array(pathinfo($d, PATHINFO_EXTENSION), $extensions)){
						$fname = pathinfo($d, PATHINFO_FILENAME);

						$sitemap->addUrl(url($directory . '/' . $d), $fname, 'S??o Paulo, Brazil', $fname);
					}
				}
			}
		}


		if($generateFile)
			$sitemap->generate($filename);

		return $sitemap->xml();
	}
}

if(!function_exists('mask')){
	function mask(string $value, string $mask) : string{
		$j = 0;

		for($i = 0; $i < mb_strlen($mask); $i++){
			if($mask[$i] == '#' && $j < mb_strlen($value)){
				$mask[$i] = $value[$j++];
			}
		}

		return $mask;
	}
}

if(!function_exists('slugify')){
	function slugify(string $string, string $separator = '-') : string{
		$string = preg_replace('/[\t\n]/', ' ', $string);
    	$string = preg_replace('/\s{2,}/', ' ', $string);

		$list = [
			'??' => 'S',
			'??' => 's',
			'??' => 'Dj',
			'??' => 'dj',
			'??' => 'Z',
			'??' => 'z',
			'??' => 'C',
			'??' => 'c',
			'??' => 'C',
			'??' => 'c',
			'??' => 'A',
			'??' => 'A',
			'??' => 'A',
			'??' => 'A',
			'??' => 'A',
			'??' => 'A',
			'??' => 'A',
			'??' => 'C',
			'??' => 'E',
			'??' => 'E',
			'??' => 'E',
			'??' => 'E',
			'??' => 'I',
			'??' => 'I',
			'??' => 'I',
			'??' => 'I',
			'??' => 'N',
			'??' => 'O',
			'??' => 'O',
			'??' => 'O',
			'??' => 'O',
			'??' => 'O',
			'??' => 'O',
			'??' => 'U',
			'??' => 'U',
			'??' => 'U',
			'??' => 'U',
			'??' => 'Y',
			'??' => 'B',
			'??' => 'Ss',
			'??' => 'a',
			'??' => 'a',
			'??' => 'a',
			'??' => 'a',
			'??' => 'a',
			'??' => 'a',
			'??' => 'a',
			'??' => 'c',
			'??' => 'e',
			'??' => 'e',
			'??' => 'e',
			'??' => 'e',
			'??' => 'i',
			'??' => 'i',
			'??' => 'i',
			'??' => 'i',
			'??' => 'o',
			'??' => 'n',
			'??' => 'o',
			'??' => 'o',
			'??' => 'o',
			'??' => 'o',
			'??' => 'o',
			'??' => 'o',
			'??' => 'u',
			'??' => 'u',
			'??' => 'u',
			'??' => 'y',
			'??' => 'y',
			'??' => 'b',
			'??' => 'y',
			'??' => 'R',
			'??' => 'r',
			','	=> $separator,
			'/' => $separator,
			' ' => $separator,
			'.' => $separator,
			'?' => $separator
		];

		$string = strtr($string, $list);
	    $string = preg_replace("/{$separator}{2,}/", $separator, $string);
	    $string = mb_strtolower($string);

	    return $string;
	}
}