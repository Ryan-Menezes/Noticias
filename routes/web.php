<?php
use Src\Classes\Route;

use App\Controllers\Panel\{
	PanelController,
	AuthController,
	NoticeController,
	CategoryController,
	UserController,
	RoleController,
	PermissionController,
	CommentController,
	SubCommentController
};
use App\Controllers\Site\{
	SiteController,
	NoticeController as NoticeControllerSite,
	CommentController as CommentControllerSite,
	CategoryController as CategoryControllerSite,
	SiteMapController
};
use App\Middlewares\Authenticate;

Route::group(['prefix' => 'painel', 'middleware' => Authenticate::class], function(){
	Route::get('/', [PanelController::class, 'index'])->name('panel');

	// ROUTE USERS
	Route::group(['prefix' => 'usuarios'], function(){
		Route::any('/', [UserController::class, 'index'])->name('panel.users');
		Route::get('/novo', [UserController::class, 'create'])->name('panel.users.create');
		Route::post('/novo/salvar', [UserController::class, 'store'])->name('panel.users.store');
		Route::get('/{id}/editar', [UserController::class, 'edit'])->name('panel.users.edit');
		Route::put('/{id}/editar/salvar', [UserController::class, 'update'])->name('panel.users.update');
		Route::delete('/{id}', [UserController::class, 'destroy'])->name('panel.users.destroy');
	});

	// ROUTE NOTICES
	Route::group(['prefix' => 'noticias'], function(){
		Route::any('/', [NoticeController::class, 'index'])->name('panel.notices');
		Route::get('/novo', [NoticeController::class, 'create'])->name('panel.notices.create');
		Route::post('/novo/salvar', [NoticeController::class, 'store'])->name('panel.notices.store');
		Route::any('/componente/{name}', [NoticeController::class, 'component'])->name('panel.notices.component');
		Route::get('/{id}/editar', [NoticeController::class, 'edit'])->name('panel.notices.edit');
		Route::put('/{id}/editar/salvar', [NoticeController::class, 'update'])->name('panel.notices.update');
		Route::delete('/{id}/deletar', [NoticeController::class, 'destroy'])->name('panel.notices.destroy');
	});

	// ROUTE COMMENTS
	Route::group(['prefix' => 'comentarios'], function(){
		Route::any('/', [CommentController::class, 'index'])->name('panel.comments');
		Route::get('/{id}/editar', [CommentController::class, 'edit'])->name('panel.comments.edit');
		Route::put('/{id}/editar/salvar', [CommentController::class, 'update'])->name('panel.comments.update');
		Route::delete('/{id}/deletar', [CommentController::class, 'destroy'])->name('panel.comments.destroy');

		// ROUTE SUBCOMMENTS
		Route::group(['prefix' => '/{comment}/respostas'], function(){
			Route::any('/', [SubCommentController::class, 'index'])->name('panel.comments.subcomments');
			Route::get('/{id}/editar', [SubCommentController::class, 'edit'])->name('panel.comments.subcomments.edit');
			Route::put('/{id}/editar/salvar', [SubCommentController::class, 'update'])->name('panel.comments.subcomments.update');
			Route::delete('/{id}/deletar', [SubCommentController::class, 'destroy'])->name('panel.comments.subcomments.destroy');
		});
	});

	// ROUTE CAREGORIES
	Route::group(['prefix' => 'categorias'], function(){
		Route::any('/', [CategoryController::class, 'index'])->name('panel.categories');
		Route::get('/novo', [CategoryController::class, 'create'])->name('panel.categories.create');
		Route::post('/novo/salvar', [CategoryController::class, 'store'])->name('panel.categories.store');
		Route::get('/{id}/editar', [CategoryController::class, 'edit'])->name('panel.categories.edit');
		Route::put('/{id}/editar/salvar', [CategoryController::class, 'update'])->name('panel.categories.update');
		Route::delete('/{id}/deletar', [CategoryController::class, 'destroy'])->name('panel.categories.destroy');
	});

	// ROUTE ROLES
	Route::group(['prefix' => 'funcoes'], function(){
		Route::any('/', [RoleController::class, 'index'])->name('panel.roles');
		Route::get('/novo', [RoleController::class, 'create'])->name('panel.roles.create');
		Route::post('/novo/salvar', [RoleController::class, 'store'])->name('panel.roles.store');
		Route::get('/{id}/editar', [RoleController::class, 'edit'])->name('panel.roles.edit');
		Route::put('/{id}/editar/salvar', [RoleController::class, 'update'])->name('panel.roles.update');
		Route::delete('/{id}/deletar', [RoleController::class, 'destroy'])->name('panel.roles.destroy');
	});

	// ROUTE PERMISSONS
	Route::group(['prefix' => 'permissoes'], function(){
		Route::any('/', [PermissionController::class, 'index'])->name('panel.permissions');
	});
});

Route::group(['prefix' => 'painel'], function(){
	// ROUTE AUTHENTICATE
	Route::get('/login', [AuthController::class, 'index'])->name('panel.login');
	Route::post('/login/valida', [AuthController::class, 'login'])->name('panel.login.validate');
	Route::get('/logout', [AuthController::class, 'logout'])->name('panel.logout');
});

// ROUTE SITE
Route::group(['prefix' => '/'], function(){
	Route::get('/', [SiteController::class, 'index'])->name('site');

	// ROUTE NOTICES
	Route::group(['prefix' => 'noticias'], function(){
		Route::get('/', [NoticeControllerSite::class, 'index'])->name('site.notices');

		Route::group(['prefix' => '/{slug}'], function(){
			Route::get('/', [NoticeControllerSite::class, 'show'])->name('site.notices.show');

			// ROUTE COMMENTS
			Route::group(['prefix' => 'comentarios'], function(){
				Route::post('/enviar', [CommentControllerSite::class, 'store'])->name('site.notices.comments.store');
				Route::post('/{id}/responder', [CommentControllerSite::class, 'response'])->name('site.notices.comments.response');
			});
		});
	});

	// ROUTE CATEGORIES
	Route::group(['prefix' => 'categorias'], function(){
		Route::get('/{slug}', [CategoryControllerSite::class, 'show'])->name('site.categories.show');
	});

	// ROUTE SITEMAP
	Route::group(['prefix' => 'sitemap'], function(){
		Route::get('/', [SiteMapController::class, 'index'])->name('site.sitemap');
	});

	// ROUTE SITEMAP-IMAGES
	Route::group(['prefix' => 'sitemap-images'], function(){
		Route::get('/', [SiteMapController::class, 'images'])->name('site.sitemap-images');
	});
});