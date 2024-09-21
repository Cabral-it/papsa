@extends('frontend.layouts.app')

@section('title', 'Actualités')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Actualités</h1>
        <p class="fs-5 text-white mb-4"> Renforcer le système de protection social est en lien avec la vision de la politique sociale du gouvernement axée sur la réduction des inégalités sociales et l'éradication de la pauvreté.</p>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Accueil</a></li>
            {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
            <li class="breadcrumb-item active text-white">Actu</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5 mb-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">Dernières infos</h5>
            <h1 class="mb-0">Retrouvrez toutes l'actualités de PAPSA</h1>
        </div>
        <div class="row g-4">
            @foreach ($articles as $article)
            <div class="col-lg-6 col-xl-3">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('storage/' . $article->image)  }}" class="img-fluid w-100" alt="">
                        <div class="blog-info">
                            <span><i class="fa fa-clock"></i> <small> {{ $article->created_at }}</small></span>
                        </div>
                    </div>
                    <div class="text-dark border p-4 ">
                        <div class="mb-4">
                            <a href="{{ route('frontend.posts.show', $article) }}" class="fw-bolder">{{ $article->title }}</a>
                        </div>
                        <div>
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="{{ route('frontend.posts.show', $article) }}">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{ $articles->links() }}
    </div>
</div>
<!-- Blog End -->
@endsection
