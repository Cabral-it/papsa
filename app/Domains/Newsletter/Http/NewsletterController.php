<?php

namespace App\Domains\Newsletter\Http;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Domains\Newsletter\Model\Newsletter;
use App\Domains\Newsletter\Services\NewsLetterService;


class NewsletterController extends Controller
{

    public function index(NewsLetterService $newsletterService)
    {
        $emails = $newsletterService->followers()->paginate(10);
        $newsletters = $newsletterService->all();
        return view('backend.newsletter', compact('emails', 'newsletters'));
    }

    public function store(Request $request, NewsLetterService $newsletterService)
    {
        $this->validate($request, [
            'object' =>'required',
            'content' => 'required'
        ]);

        // Creation du newsletter qui s'ocupper de l'envoie en mm temps
        $newsletterService->create($request->all());

        return redirect()->route('admin.newsletter.index')->with(['flash_success' => 'Votre newslette est enregistré et envoyé à tous les abonnés.']);
    }

    public function show(Newsletter $newsletter)
    {
        $mail = $newsletter;
        return view('backend.mails.newsletter', compact('mail'));
    }

    public function delete(Newsletter $newsletter, NewsletterService $newsletterService)
    {
        $newsletterService->delete($newsletter);

        return redirect()->route('admin.newsletter.index')->with(['flash_success' => 'Le newsletter a été supprimé']);
    }

}
