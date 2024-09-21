<?php

namespace App\Http\Controllers\Frontend;

use App\Domains\Slide\Services\SlideService;
use App\Domains\Article\Services\ArticleService;


/**
 * Class HomeController.
 */
class HomeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(ArticleService $articleService, SlideService $slideService)
    {
        $articles = $articleService->published()
                    ->limit(3)->get();
        $slides = $slideService->published()->get();
        return view('frontend.index', compact('articles', 'slides'));
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
