<?php

namespace App\Domains\Mediatheque\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Domains\Mediatheque\Model\Media;
use App\Domains\Article\Services\ArticleService;
use App\Domains\Mediatheque\Services\MediaService;

class MediaController extends Controller
{
    public function index(MediaService $mediaService, ArticleService $articleService)
    {
        $articles = $articleService->published()->limit(5);
        $medias = [
            'documents' => $mediaService->documents()->paginate(10),
            'images' => $mediaService->images()->paginate(9),
            'videos' => $mediaService->videos()->paginate(6),
        ];

        return view('frontend.medias.index', compact('medias', 'articles'));
    }

    public function download(Media $media, MediaService $mediaService)
    {
        return $mediaService->download($media);
    }

}
