<?php

namespace App\Domains\Article\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\Article\Model\Article;
use Illuminate\Support\Facades\Storage;
use App\Domains\Article\Services\ArticleService;


class ArticleController extends Controller
{
    public function index()
    {
        $articles =  Article::orderBy('created_at', 'DESC')->paginate(10);
        return view('backend.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('backend.articles.create');
    }

    public function store(Request $request, ArticleService $articleService)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png,gif',
            'title' => 'required|string',
            'content' => 'required',
        ]);

        $path = $request->file('image')->store('articles', 'public');
        $data = [
            'image' => $path,
            'title' => $request->title,
            'content' => $request->content,
            'publish' => $request->publish ? true : false
        ];
        $articleService->create($data);

        return redirect()->route('admin.article.index')->with(['flash_success' => 'L\'article a bien été enregistré']);

    }

    public function show(Article $article)
    {
        return view('backend.articles.show', compact('article'));
    }

    public function edit(Article $article)
    {
        return view('backend.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article, ArticleService $articleService)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png,gif',
            'title' => 'required|string',
            'content' => 'required',
        ]);

        $data = [
            'title' => $request->title,
            'content' => $request->content,
            'publish' => $request->publish ? true : false
        ];

        if ($request->file('image')) {
            $path = $request->file('image')->store('articles', 'public');
            $data['image'] =  $path;
            Storage::disk('public')->delete($article->image);
        }
        $articleService->update($data, $article);

        return redirect()->route('admin.article.show', $article)->with(['flash_success' => 'L\'article modifié avec success']);
    }

    public function delete(Request $request, Article $article, ArticleService $articleService)
    {
        if($article->id) $articleService->delete($article);
        return redirect()->route('admin.article.index')->with(['flash_success' => 'L\'article a bien été supprimé']);
    }

}
