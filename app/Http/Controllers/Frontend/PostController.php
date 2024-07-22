<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;


/**
 * Class HomeController.
 */
class PostController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.posts.index');
    }


    public function show(Post $post)
    {

        return view('frontend.posts.show', compact('post'));
    }
}
