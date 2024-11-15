<?php

namespace App\Domains\Newsletter\Services;

use App\Services\BaseService;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Domains\Newsletter\Model\Follower;
use App\Domains\Newsletter\Model\Newsletter;
use App\Domains\Newsletter\Mail\NewsletterMail;

class NewsLetterService extends BaseService
{
    /**
     * NewslettetService constructor.
     *
     * @param  Newsletter  $newsletter
     */
    public function __construct(Newsletter $newsletter, Follower $follower)
    {
        $this->model = $newsletter;
        $this->follower = $follower;
    }

    public function all()
    {
        return $this->model::all();
    }

    public function create(array $data)
    {
        // Stocker das la base de données
        $newsletter = $this->model::create($data);

        $followers = $this->followers()->get();
        foreach ($followers as $follower) {
            // Cocevoir le mail & Envoie sur une queue
            Mail::to($follower)->queue(new NewsletterMail($newsletter));
        }
        
        return true;
    }

    public function delete(Newsletter $newsletter)
    {
        return $newsletter->delete();
    }

    public function follow(array $data, )
    {
        return $this->follower->create($data);
    }

    public function followers()
    {
        return $this->follower->where('activate', true);
    }

    public function unfollow()
    {
        return $this->follower->update(['activate' => false]);
    }
}
