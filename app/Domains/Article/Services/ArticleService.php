<?php

namespace App\Domains\Article\Services;

use App\Services\BaseService;
use App\Domains\Article\Model\Article;
use Illuminate\Support\Facades\Storage;

class ArticleService extends BaseService
{
    /**
     * ArticleService constructor.
     *
     * @param  Article  $article
     */
    public function __construct(Article $article)
    {
        $this->model = $article;
    }

    public function all()
    {
        return $this->model::all();
    }

    public function published()
    {
        return $this->model::orderBy('created_at', 'DESC')->where('publish', true);
    }

    public function lastArticles(int $limit)
    {
        return $this->published()->limit($limit);
    }

    public function create(array $data)
    {
        return $this->model::create($data);
    }

    public function update(array $data, Article $article)
    {
        return $article->update($data);
    }

    public function delete(Article $article)
    {
        Storage::disk('public')->delete($article->image);
        return $article->delete();
    }

    public function togglePublish(Article $article)
    {
        return $article->update(['publish' => !$article->publish]);
    }
}

