<!DOCTYPE html>
<html lang="<?= config('app.lang') ?>">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="<?= public_path('assets/css/libs/bootstrap/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= public_path('assets/css/libs/fontawesome/all.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= public_path('assets/css/libs/fontawesome/brands.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= public_path('assets/css/libs/fontawesome/fontawesome.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= public_path('assets/css/libs/fontawesome/regular.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= public_path('assets/css/libs/fontawesome/solid.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= public_path('assets/css/libs/fontawesome/svg-with-js.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= public_path('assets/css/libs/fontawesome/v4-shims.min.css') ?>">
	<style type="text/css">
		.content{
			position: absolute;
			width: 100%;
			height: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
			text-align: center;
		}
	</style>

	<title><?= config('app.name') ?> | <?= $code ?> - <?= $message ?></title>
</head>
<body>
	<section class="content">
		<h1><?= $message ?> | <?= $code ?></h1>
	</section>

	<script type="text/javascript" src="<?= public_path('assets/js/libs/bootstrap/bootstrap.min.js') ?>"></script>
</body>
</html>