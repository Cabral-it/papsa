<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\Slide\Services\SlideService;
use App\Domains\Article\Services\ArticleService;
use App\Domains\Mediatheque\Services\MediaService;
use App\Domains\Newsletter\Services\NewsLetterService;


/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(
        ArticleService $articleService,
        SlideService $slideService,
        MediaService $mediaService
    )
    {
        $articles = $articleService->published()->limit(3)->get();
        $slides = $slideService->published()->get();
        $medias = [
            'documents' => $mediaService->documents()->paginate(2),
            'images' => $mediaService->images()->limit(3)->get(),
            'videos' => $mediaService->videos()->limit(3)->get(),
        ];

        return view('frontend.index', compact('articles', 'slides', 'medias'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    }

    public function signup(Request $request, NewsLetterService $nlService)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:followers'
        ]);
        $email = $nlService->follow($request->all());

        return redirect()->route('frontend.index')->with(['flash_success' => 'Merci de votre abonnement à notre newsletter']);
    }
}
