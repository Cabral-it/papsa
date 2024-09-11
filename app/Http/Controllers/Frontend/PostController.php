<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Domains\Article\Model\Article;
use App\Domains\Article\Services\ArticleService;


/**
 * Class HomeController.
 */
class PostController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(ArticleService $articleService)
    {
        $articles = $articleService->published()->paginate(12);
        return view('frontend.posts.index', compact('articles'));
    }


    public function show(Article $article, ArticleService $articleService)
    {
        $lastArticles = $articleService->lastArticles(4)->get();
        return view('frontend.posts.show', compact('article', 'lastArticles'));
    }
}
