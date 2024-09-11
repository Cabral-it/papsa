@extends('frontend.layouts.app')

@section('title', 'Actualités')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Actualités</h1>
        <p class="fs-5 text-white mb-4">{{ $article->title }}</p>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Accueil</a></li>
            <li class="breadcrumb-item"> <a href="{{ route('frontend.posts.index') }}">Actu</a> </li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Blog Start -->
<div class="container-fluid py-5 mb-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-sm-9">
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}" class="img-fluid mb-2">
                <h2 class="mb-4">{{ $article->title }}</h2>
                <small>{{ $article->created_at }}</small>
                <div class="content">
                    <p class="mb-4">{{ $article->content }}</p>
                </div>
            </div>
            <div class="col-sm-3">
                @foreach ($lastArticles as $lastArticle)
                <a href="{{ route('frontend.posts.show', $lastArticle) }}" class="row mb-4">
                    <div class="col-sm-4"><img src="{{ asset('storage/' . $lastArticle->image) }}" alt="Image" class="img-fluid"></div>
                    <div class="col-sm-8">{{ $lastArticle->title }}</div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection
