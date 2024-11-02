@extends('frontend.layouts.app')

@section('title', 'Bibliothèque')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Bibliothèque</h1>
        <p class="fs-5 text-white mb-4"> Renforcer le système de protection social est en lien avec la vision de la politique sociale du gouvernement axée sur la réduction des inégalités sociales et l'éradication de la pauvreté.</p>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Accueil</a></li>
            {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
            <li class="breadcrumb-item active text-white">Bibliothèque</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Bibliotheque Start -->
{{-- Documents --}}
<div class="container Bibliotheque py-5">
    <h2 class="text-primary text-center  text-uppercase py-2">Documents</h2>
    <table class="table">
        <tbody>
            @foreach ($medias['documents'] as $document)
            <tr>
                <td><img src="{{ asset('images/pdf.png') }}" alt="pdf" class="img" width="32px" height="auto"></td>
                <td>{{ $document->title }}</td>
                <td>
                    <a href="{{ route('frontend.media.download', $document) }}" data-target="_blank" class="btn btn-sm btn-primary m-1">Télécharger</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">{{ $medias['documents']->links() }}</div>
</div>
{{-- Images --}}
<div class="gallery mb-3">
    <h2 class="text-primary text-center text-uppercase py-2">Images</h2>
    <div class="row g-0">
        @foreach ($medias['images'] as $image)
        <div class="col-lg-4">
            <div class="gallery-item">
                <img src="{{ asset('storage/' . $image->file) }}" class="img-fluid w-100" alt="{{ $image->title }}">
                <div class="search-icon">
                    <a href="{{ asset('storage/' . $image->file) }}" data-lightbox="gallery-2" class="my-auto"><i class="fas fa-search-plus btn-hover-color bg-white text-primary p-3"></i></a>
                </div>
                <div class="gallery-content">
                    <div class="gallery-inner pb-3">
                        {{-- <a href="#" class="h4 text-white">{{ $image->title }}</a> --}}
                        <a href="#" class="text-white"><p class="mb-0">{{ $image->title }}</p></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">{{ $medias['images']->links() }}</div>
</div>

{{-- Videos --}}
<div class="container my-2">
    <h3 class="text-primary text-center text-uppercase py-2">Vidéos</h3>
    <div class="row">
        @foreach ($medias['videos'] as $video)
        <div class="col-sm-4 p-3">
            <div class="p-2 text-center embed-responsive embed-responsive-16by9">
                <video src="{{ asset('storage/' . $video->file) }}" controls class="w-100 embed-responsive-item"></video>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">{{ $medias['videos']->links() }}</div>
</div>
<!-- Bibliotheque End -->
@endsection
