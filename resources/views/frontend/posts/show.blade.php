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
            <li class="breadcrumb-item"> <a href="{{ route('frontend.posts.index') }}">Actu</a> </li>
            <li class="breadcrumb-item active text-white">TITRE</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Blog Start -->
<div class="container-fluid py-5 mb-5">
    <div class="container py-5">
        Un Article ...
    </div>
</div>
<!-- Blog End -->
@endsection
