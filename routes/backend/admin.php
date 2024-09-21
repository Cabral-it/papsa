<?php

use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\Backend\DashboardController;
use App\Domains\Slide\Http\Controllers\SlideController;
use App\Domains\Article\Http\Controllers\Backend\ArticleController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });

Route::get('articles', [ArticleController::class, 'index'])->name('article.index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });
Route::get('articles/create', [ArticleController::class, 'create'])->name('article.create')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
        $trail->push(__('Articles'), route('admin.article.index'));
        $trail->push(__('Ajouter un article'), route('admin.article.create'));
    });
Route::post('articles/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('articles/{article}', [ArticleController::class, 'show'])->name('article.show')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
        $trail->push(__('Articles'), route('admin.article.index'));
        $trail->push(__('Prévisualiser un article'));
    });
Route::get('articles/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
        $trail->push(__('Articles'), route('admin.article.index'));
        $trail->push(__('Modifier un article'));
    });
Route::patch('articles/{article}/update', [ArticleController::class, 'update'])->name('article.update');
Route::delete('articles/{article}/delete', [ArticleController::class, 'delete'])->name('article.delete');

Route::patch('slides/{slide}/update', [SlideController::class, 'update'])->name('slide.update');
Route::get('slides/{slide}/enable', [SlideController::class, 'enable'])->name('slide.enable');
Route::get('slides/{slide}/disable', [SlideController::class, 'disable'])->name('slide.disable');
