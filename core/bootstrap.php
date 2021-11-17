<?php
use Src\Classes\{
	Route,
	View,
	Session,
	Request
};

require_once __DIR__ . '/../core/helpers.php';
require_once __DIR__ . '/../core/config.php';
require_once __DIR__ . '/../routes/web.php';

Route::dispatch();
Session::clearFlash();