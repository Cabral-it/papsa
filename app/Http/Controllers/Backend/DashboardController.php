<?php

namespace App\Http\Controllers\Backend;

use App\Domains\Slide\Model\Slide;
use App\Domains\Article\Services\ArticleService;

/**
 * Class DashboardController.
 */
class DashboardController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(ArticleService $articleService)
    {
        $articleStat = [
            'total' => $articleService->all()->count(),
            'published' => $articleService->published()->count(),
        ];
        $slides = Slide::all();

        return view('backend.dashboard', compact('articleStat', 'slides'));
    }
}
