<?php

use Tabuna\Breadcrumbs\Trail;
use App\Http\Controllers\PlainteController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PostController;
use App\Http\Controllers\Frontend\TermsController;
use App\Domains\Mediatheque\Http\Controllers\Frontend\MediaController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'
 */
Route::get('/', [HomeController::class, 'index'])
    ->name('index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('frontend.index'));
    });

Route::get('terms', [TermsController::class, 'index'])
    ->name('pages.terms')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('frontend.index')
            ->push(__('Terms & Conditions'), route('frontend.pages.terms'));
    });


// MGP
Route::get('/plainte/{type}', [PlainteController::class, 'index'])->name('plaintes.index');
Route::post('/plainte', [PlainteController::class, 'store'])->name('plaintes.store');
Route::get('/plainte/dept/{id}', [PlainteController::class, 'getDepartement'])->name('plaintes.dep');

// A propos
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Bibliotheque
Route::get('/media', [MediaController::class, 'index'])->name('media.index');
Route::get('/media/{media}/download', [MediaController::class, 'download'])->name('media.download');

// Les programmes
Route::prefix('programes/')->name('programmes.')->group(function () {
    Route::get('pnbsf', [HomeController::class, 'pnbsf'])->name('pnbsf');
    Route::get('ykk', [HomeController::class, 'ykk'])->name('ykk');
    Route::get('pra', [HomeController::class, 'pra'])->name('pra');
    Route::get('ptm', [HomeController::class, 'ptm'])->name('ptm');
});

// Actualités
Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{article}', [PostController::class, 'show'])->name('posts.show');
