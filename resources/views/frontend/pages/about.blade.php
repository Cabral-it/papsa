@extends('frontend.layouts.app')

@section('title', 'PAPSA')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">A propos de PAPSA</h1>
        <p class="fs-5 text-white mb-4"> Renforcer le système de protection social est en lien avec la vision de la politique sociale du gouvernement axée sur la réduction des inégalités sociales et l'éradication de la pauvreté.</p>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Accueil</a></li>
            <li class="breadcrumb-item active text-white">A propos</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Mot du coordonnateur -->
<div class="container-fluid about  py-2">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-5">
                <div class="h-100">
                    <img src="img/volunteers-3.jpg" class="img-fluid w-100 h-100" alt="Image">
                </div>
            </div>
            <div class="col-xl-7">
                <h5 class="text-uppercase text-primary">Mot du Coordonnateur</h5>
                <h1 class="mb-4">Monsieur DEMBA NDIAYE</h1>
                <p class="fs-5 mb-4">Le PAPSA vise à renforcer les principaux outils du système de protection sociale sénégalais. Le PAPSA vise à renforcer les principaux outils du système de protection sociale sénégalais. Le PAPSA vise à renforcer les principaux outils du système de protection sociale sénégalais Le PAPSA vise à renforcer les principaux outils du système de protection sociale sénégalais. Le PAPSA vise à renforcer les principaux outils du système de protection sociale sénégalais. Le PAPSA vise à renforcer les principaux outils du système de protection sociale sénégalais. Le PAPSA vise à renforcer les principaux outils du système de protection sociale sénégalais.</p>
            </div>
        </div>
    </div>
</div>
<!-- Mot End -->

{{-- Objectis --}}
<div class="container-fluid">
    <div class="text-center mx-auto pb-1" style="max-width: 800px;">
        <h2 class="text-uppercase text-primary">Objectifs du projet</h5>
    </div>
    <div class="container">
        <p class="text-center">Le Projet de filets sociaux adaptatifs (P176544) a pour objectif de développement (PDO) d'aider le gouvernement à renforcer son système de protection sociale adaptatif en améliorant les caractéristiques clés du système et en renforçant la capacité institutionnelle, en aidant à étendre la portée des programmes en permettant aux ménages pauvres et vulnérables d'accéder à une aide adaptée aux chocs, en consolidant les nouveaux aspects de la protection sociale tels que le soutien productif, et en améliorant l'efficacité globale par l'innovation et l'apprentissage opérationnel. Au niveau national, le projet permettra une amélioration de la résilience socio-économique des ménages pauvres et vulnérables face aux chocs climatiques.</p>
    </div>
</div>
{{-- End Objectifs --}}

{{-- Les composants --}}
<div class="container-fluid">
    <div class="text-center mx-auto pb-1" style="max-width: 800px;">
        <h2 class="text-uppercase text-primary">Les composants</h5>
    </div>
    <div class="container">
        <p class="text-center">Le projet sera mis en oeuvre sur une période de cinq (5) ans et s’articule autour de cinq (03) composantes complémentaires conçues dans l’optique de renforcer le système de protection social en s’appuyant sur les avancées déjà notées avec le Projet d’Appui aux Filets Sociaux (P144597) en termes de protection sociale.</p>
        <div class="tab-class bg-secondary p-4">
            <ul class="nav d-flex mb-2">
                <li class="nav-item mb-3">
                    <a class="d-flex py-2 text-center bg-white active" data-bs-toggle="pill" href="#tab-1">
                        <span class="text-dark" style="width: 150px;">Composant 1</span>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a class="d-flex py-2 mx-3 text-center bg-white" data-bs-toggle="pill" href="#tab-2">
                        <span class="text-dark" style="width: 150px;">Composant 2</span>
                    </a>
                </li>
                <li class="nav-item mb-3">
                    <a class="d-flex py-2 text-center bg-white" data-bs-toggle="pill" href="#tab-3">
                        <span class="text-dark" style="width: 150px;">Composant 3</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="text-start my-auto">
                                    <h5 class="text-uppercase">Composante 1 : Renforcement des fonctions transversales du système de protection sociale</h5>
                                    <p class="mb-4">
                                        Cette composante vise à renforcer les fonctions qui sont transversales à tout le système de filet de sécurité sociale. Depuis 2012, le gouvernement du Sénégal a jeté les bases d'un système de protection sociale performant. Le projet d’appui aux filets sociaux soutenu par la Banque a été adopté en 2014 et a permis d'établir les fonctionnalités de base d'un système de filet de sécurité social adaptatif, notamment un Registre social à grande échelle et un programme de transferts monétaires. Des programmes supplémentaires, tels que l'aide en cas de choc ou le soutien productif, ont été construits sur ce mécanisme de prestation de base et mis en oeuvre avec succès. Le projet proposé cherchera à consolider et à améliorer les éléments de base du système (sous-composante 1.1), à améliorer la capacité institutionnelle des institutions clés du secteur de la protection sociale (sous-composante 1.2), et à soutenir une gestion et des évaluations de projet efficaces (sous-composante 1.3).
                                    </p>
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
                                    <h5 class="text-uppercase">Composante 2 : Equité sociale et résilience productive</h5>
                                    <p class="mb-4">
                                        Cette composante fournira aux ménages bénéficiaires un ensemble intégré de mesures de soutien, y compris un ensemble de mesures de base et un soutien aux moyens de subsistance. Elle vise à s'attaquer à plusieurs contraintes qui entravent l'inclusion économique des plus pauvres et des plus vulnérables. Plus précisément, ses objectifs sont les suivants (i) de soutenir l'expansion du le projet YKK (souscomposante 2.1) ; et (ii) soutenir les intrants agricoles (sous-composante 2.2).
                                    </p>
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
                                    <h5 class="text-uppercase">Composante 3 : Solidarité nationale à travers une assistance en réponse aux chocs</h5>
                                    <p class="mb-4">
                                        Cette composante soutiendra la création d'un programme de réponse aux chocs dans le cadre du système de protection social et la mise en oeuvre d'une assistance adaptée aux chocs afin d'aider les ménages pauvres et vulnérables à faire face aux chocs, y compris les chocs climatiques tels que les sécheresses, les inondations ou les incendies. Des réponses rapides sont essentielles pour limiter les impacts à court et à long terme, des chocs sur les capacités de résilience et le capital humain et productif des ménages. Plus spécifiquement, les objectifs de cette composante sont de : (i) soutenir l’opérationnalisation d’un nouveau programme de réponse aux chocs nouvellement crée (sous-composante 3.1) ; et (ii) mettre en oeuvre l'assistance en réponse aux chocs (sous-composante 3.2).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Composants End --}}

{{-- Partenaire --}}
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
{{-- End partenaire --}}

<!-- Volunteers Start -->
<div class="container-fluid volunteer py-5 mt-5">
    <div class="container">
        <div class="text-center mx-auto pb-1" style="max-width: 800px;">
            <h2 class="text-uppercase text-primary pb-2">Le personnel de PAPSA</h5>
        </div>
        <div class="row g-4">
            <div class="col-lg-3">
                <div class="volunteer-img">
                    <img src="img/volunteers-1.jpg" class="img-fluid w-100" alt="Image">
                    <div class="volunteer-title">
                        <h5 class="mb-2 text-white">Michel Brown</h5>
                        <p class="mb-0 text-white">Communicator</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="volunteer-img">
                    <img src="img/volunteers-3.jpg" class="img-fluid w-100" alt="Image">
                    <div class="volunteer-title">
                        <h5 class="mb-2 text-white">Michel Brown</h5>
                        <p class="mb-0 text-white">Communicator</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="volunteer-img">
                    <img src="img/volunteers-2.jpg" class="img-fluid w-100" alt="Image">
                    <div class="volunteer-title">
                        <h5 class="mb-2 text-white">Michel Brown</h5>
                        <p class="mb-0 text-white">Communicator</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="volunteer-img">
                    <img src="img/volunteers-4.jpg" class="img-fluid w-100" alt="Image">
                    <div class="volunteer-title">
                        <h5 class="mb-2 text-white">Michel Brown</h5>
                        <p class="mb-0 text-white">Communicator</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Volunteers End -->
@endsection
