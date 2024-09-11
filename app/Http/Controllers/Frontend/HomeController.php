<?php

namespace App\Http\Controllers\Frontend;

use App\Domains\Article\Services\ArticleService;


/**
 * Class HomeController.
 */
class HomeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(ArticleService $articleService)
    {
        $articles = $articleService->published()
                    ->limit(3)->get();
        return view('frontend.index', compact('articles'));
    }


    public function about()
    {
        return view('frontend.pages.about');
    }

    public function media()
    {
        return view('frontend.pages.media');
    }
}
