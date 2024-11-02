@extends('frontend.layouts.app')

@section('title', 'PAPSA')

@section('content')


<!-- Carousel Start -->
<div class="container-fluid carousel-header vh-100 px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($slides as $slide)
            <li data-bs-target="#carouselId" data-bs-slide-to="{{ $loop->index }}" class="@if($loop->first) active @endif"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            @foreach ($slides as $slide)
                <div class="carousel-item @if($loop->first) active @endif">
                    <img src="{{ asset('storage/' . $slide->image) }}" class="img-fluid" alt="Image">
                    <div class="carousel-caption">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Projet d'Appui à la Protection Sociale Adaptative</h4>
                            <h1 class="display-1 text-capitalize text-white mb-4">PAPSA</h1>
                            <p class="mb-5 fs-5">{{ $slide->description }}</p>
                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn-hover-bg btn btn-primary text-white py-3 px-5" href="#">A propos</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-fluid about  py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-5">
                <div class="h-100">
                    <img src="img/about-1.jpg" class="img-fluid w-100 h-100" alt="Image">
                </div>
            </div>
            <div class="col-xl-7">
                <h5 class="text-uppercase text-primary">A propos du Projet</h5>
                <h1 class="mb-4">Avec l'appui de la Banque Mondiale</h1>
                <p class="fs-5 mb-4">Le PAPSA vise à renforcer les principaux outils du système de protection sociale sénégalais.</p>
                <div class="tab-class bg-secondary p-4">
                    <ul class="nav d-flex mb-2">
                        <li class="nav-item mb-3">
                            <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                                <span class="text-dark" style="width: 150px;">Objectif</span>
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                                <span class="text-dark" style="width: 150px;">Mission</span>
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                                <span class="text-dark" style="width: 150px;">Vision</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            {{-- <h5 class="text-uppercase mb-3">Lorem Ipsum 1</h5> --}}
                                            <p class="mb-4">Le Projet de filets sociaux adaptatifs (P176544) a pour objectif de développement (PDO) d'aider le gouvernement à renforcer son système de protection sociale adaptatif en améliorant les caractéristiques clés du système et en renforçant la capacité institutionnelle, en aidant à étendre la portée des programmes en permettant aux ménages pauvres et vulnérables d'accéder à une aide adaptée aux chocs, en consolidant les nouveaux aspects de la protection sociale tels que le soutien productif, et en améliorant l'efficacité globale par l'innovation et l'apprentissage opérationnel</p>
                                            {{-- <div class="d-flex align-items-center justify-content-start">
                                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            {{-- <h5 class="text-uppercase mb-3">Lorem Ipsum 2</h5> --}}
                                            <p class="mb-4">Le projet sera mis en œuvre sur une période de cinq (5) ans et s’articule autour de cinq (03) composantes complémentaires conçues dans l’optique de renforcer le système de protection social en s’appuyant sur les avancées déjà notées avec le Projet d’Appui aux Filets Sociaux (P144597) en termes de protection sociale :
                                                <ul>
                                                    <li>Composante 1 : Renforcement des fonctions transversales du système de protection sociale</li>
                                                    <li>Composante 2 : Equité sociale et résilience productive</li>
                                                    <li>Composante 3 : Solidarité nationale à travers une assistance en réponse aux chocs</li>
                                                </ul>
                                            </p>
                                            {{-- <div class="d-flex align-items-center justify-content-start">
                                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex">
                                        <div class="text-start my-auto">
                                            {{-- <h5 class="text-uppercase mb-3">Lorem Ipsum 3</h5> --}}
                                            <p class="mb-4">Ce projet, dont l’objectif de développement est de renforcer le système de protection social est en lien avec la vision de la politique sociale du gouvernement axée sur la réduction des inégalités sociales et l'éradication de la pauvreté. Cette ambition est inscrite dans l'axe 2 du Plan Sénégal Emergent (PSE) qui met l'accent sur le capital humain, la protection sociale et le développement durable, faisant ainsi de la protection sociale un secteur prioritaire. Au niveau national, le projet permettra une amélioration de la résilience socio-économique des ménages pauvres et vulnérables face aux chocs climatiques.</p>
                                            {{-- <div class="d-flex align-items-center justify-content-start">
                                                <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Read More</a>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5 mb-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">Derniers Nouvelles</h5>
        </div>
        <div class="row g-4">
            @foreach ($articles as $article)
            <div class="col-lg-6 col-xl-4">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="{{ asset('storage/'. $article->image) }}" class="img-fluid w-100" alt="Image">
                        <div class="blog-info">
                            <span><i class="fa fa-clock"></i><small> {{ $article->created_at }}</small></span>
                        </div>
                        <div class="search-icon">
                            <a href="{{ asset('storage/'. $article->image) }}" data-lightbox="Blog-1" class="my-auto"><i class="fas fa-search-plus btn-primary text-white p-3"></i></a>
                        </div>
                    </div>
                    <div class="text-dark border p-4 ">
                        <h5 class="mb-4">{{ $article->title }}</h5>
                        <div class="text-center">
                            <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="{{ route('frontend.posts.show', $article) }}">Lire Plus</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-12">
                <div class="d-flex align-items-center justify-content-center">
                    <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="{{ route('frontend.posts.index') }}">Plus d'actualités</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

<!-- Counter Start -->
<div class="container-fluid counter py-5" style="background: linear-gradient(rgba(0, 0, 0, .4), rgba(0, 0, 0, 0.4)), url(img/volunteers-bg.jpg) center center; background-size: cover;">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-white">QUELQUES CHIFFRES</h5>
            {{-- <p class="text-white mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley --}}
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="counter-item text-center border p-5">
                    <i class="fas fa-thumbs-up fa-4x text-white"></i>
                    <h3 class="text-white my-4">Registre National Unique (personnes)</h3>
                    <div class="counter-counting">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">1000000</span>
                        {{-- <span class="h1 fw-bold text-primary">Personnes</span> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="counter-item text-center border p-5">
                    <i class="fas fa-file-invoice-dollar fa-4x text-white"></i>
                    <h3 class="text-white my-4">Yook-Kom Kom (ménages)</h3>
                    <div class="counter-counting text-center border-white w-100" style="border-style: dotted; font-size: 30px;">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">15000</span>
                        {{-- <span class="h1 fw-bold text-primary">Ménages</span> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="counter-item text-center border p-5">
                    <i class="fas fa-user fa-4x text-white"></i>
                    <h3 class="text-white my-4">Programme de résilience agricole (ménages)</h3>
                    <div class="counter-counting text-center border-white w-100" style="border-style: dotted; font-size: 30px;">
                        <span class="text-white fs-2 fw-bold" data-toggle="counter-up">10000</span>
                        {{-- <span class="h1 fw-bold text-primary">+</span> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="counter-item text-center border p-5">
                    <i class="fas fa-heart fa-4x text-white"></i>
                    <h3 class="text-white my-4">Days of Help</h3>
                    <div class="counter-counting text-center border-white w-100" style="border-style: dotted; font-size: 30px;">
                        <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">487</span>
                        <span class="h1 fw-bold text-primary">+</span>
                    </div>
                </div>
            </div> --}}
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-center">
                    {{-- <a class="btn-hover-bg btn btn-primary text-white py-2 px-4" href="#">Join With Us</a> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter End -->

<!-- Partenaires Start -->
<div class="container-fluid event py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 800px;">
            <h5 class="text-uppercase text-primary">Nos partenaires</h5>
        </div>
        <div class="event-carousel owl-carousel">
            <div class="event-item">
                <img src="images/bm-logo500.png" class="img-fluid w-100" alt="Image">
            </div>
            <div class="event-item">
                <img src="images/logo-mfs500.png" class="img-fluid w-100" alt="Image">
            </div>
            <div class="event-item">
                <img src="images/logo-dgpsn500.png" class="img-fluid w-100" alt="Image">
            </div>
            <div class="event-item">
                <img src="images/logo-maer500.png" class="img-fluid w-100" alt="Image">
            </div>
        </div>
    </div>
</div>
<!-- Partenaires End -->

<!-- Gallery Start -->
<div class="container-fluid gallery py-5 px-0">
    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
        <h5 class="text-uppercase text-primary">Médiathéque</h5>
        <h1 class="mb-4">Documents, images et vidéos</h1>
    </div>
    {{-- Documents --}}
    <div class="container">
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
    {{-- Videos --}}
    <div class="container mt-5">
        <h3 class="text-primary text-uppercase mb-2">Vidéos</h3>
        <div class="event-carousel owl-carousel">
            @foreach ($medias['videos'] as $video)
            <div class="event-item">
                <div class="p-2 text-center embed-responsive embed-responsive-16by9">
                    <video src="{{ asset('storage/' . $video->file) }}" controls class="w-100 embed-responsive-item"></video>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>
<!-- Gallery End -->
@endsection
