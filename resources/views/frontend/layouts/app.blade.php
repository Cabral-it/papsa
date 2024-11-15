<!DOCTYPE html>
<html lang="{{ htmlLang() }}" @langrtl dir="rtl" @endlangrtl>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ appName() }} | @yield('title')</title>

        <meta name="description" content="@yield('meta_description', appName())">
        <meta name="author" content="@yield('meta_author', 'Abdourahmane DIOP')">
        @yield('meta')
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />


        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet">
        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Libraries Stylesheet -->
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        @stack('before-styles')

        <!-- Customized Bootstrap Stylesheet -->
        <!-- Template Stylesheet -->
        <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
        {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}

        @stack('after-styles')
        <!-- Core theme CSS (includes Bootstrap)-->
    </head>
    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top px-0">
            <div class="container px-0">
                <div class="topbar">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-8">
                            <div class="topbar-info d-flex flex-wrap">
                                <a href="#" class="text-light me-4"><i class="fas fa-envelope text-white me-2"></i>contact@papsa.sn</a>
                                <a href="#" class="text-light"><i class="fas fa-phone-alt text-white me-2"></i>+221339000000</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="topbar-icon d-flex align-items-center justify-content-end">
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                                {{-- <a href="#" class="btn-square text-white me-2"><i class="fab fa-pinterest"></i></a> --}}
                                {{-- <a href="#" class="btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a> --}}
                                <a href="#" class="btn-square text-white me-0"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <nav class="navbar navbar-light bg-light navbar-expand-xl">
                    <a href="{{ route('frontend.index') }}" class="navbar-brand ms-3">
                        <img src="{{ asset('images/logo-papsa.png') }}" height="50px" alt="Logo PAPSA">
                    </a>
                    <button class="navbar-toggler py-2 px-3 me-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-light" id="navbarCollapse">
                        <div class="navbar-nav ms-auto">
                            <a href="{{ route('frontend.index') }}" class="nav-item nav-link {{ activeClass(Route::is('frontend.index')) }}">Accueil</a>
                            <a href="{{ route('frontend.about') }}" class="nav-item nav-link {{ activeClass(Route::is('frontend.about')) }}">Le projet</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Programmes</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="{{ route('frontend.programmes.pnbsf') }}" class="dropdown-item {{ activeClass(Route::is('frontend.programmes.pnbsf')) }}">Programme National de Bourses de Sécurité Familiale</a>
                                    <a href="{{ route('frontend.programmes.ykk') }}" class="dropdown-item {{ activeClass(Route::is('frontend.programmes.ykk')) }}">Yokk Koom Koom</a>
                                    <a href="{{ route('frontend.programmes.pra') }}" class="dropdown-item {{ activeClass(Route::is('frontend.programmes.pra')) }}">Programme de résilience agricole</a>
                                    <a href="{{ route('frontend.programmes.ptm') }}" class="dropdown-item {{ activeClass(Route::is('frontend.programmes.ptm')) }}">Programmes de transferts monétaires</a>
                                    {{-- <a href="404.html" class="dropdown-item">404 Error</a> --}}
                                </div>
                            </div>
                            <a href="{{ route('frontend.posts.index') }}" class="nav-item nav-link {{ activeClass(Route::is('frontend.posts.index')) }}">Actualités</a>
                            <a href="{{ route('frontend.media.index') }}" class="nav-item nav-link {{ activeClass(Route::is('frontend.media.index')) }}">Mediathéque</a>
                            {{-- <a href="events.html" class="nav-item nav-link">Events</a> --}}
                            {{-- <a href="contact.html" class="nav-item nav-link">Contact</a> --}}
                        </div>
                        <div class="d-flex align-items-center flex-nowrap pt-xl-0 mx-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mgp_modal">Déposez votre Plainte</button>-
                        </div>
                    </div>
                </nav>

                @include('includes.partials.announcements')
                @include('includes.partials.read-only')
                @include('includes.partials.logged-in-as')
                @include('includes.partials.messages')
            </div>
        </div>
        <!-- Navbar End -->

        @yield('content')

        <!-- Footer Start -->
        <div class="container-fluid footer bg-dark text-body py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white">PAPSA</h4>
                            <p class="mb-4">
                                Projet d'Appui à la Protection Social Adaptative  <br>
                                Cité Keur Gorgui, Mermoz Dakar <br>
                                (+221) 33 879 29 60 <br>
                                contact@papsa.sn
                            </p>
                            <p>Restez informez de tous activités du projet</p>
                            <div class="position-relative mx-auto">
                                <form action="{{ route('frontend.newsletter.signup') }}" method="post">
                                    @csrf
                                    @method('post')
                                    <input name="email" class="form-control border-0 bg-secondary w-100 py-3 ps-4 pe-5" type="text" placeholder="Entrez votre email">
                                    <button type="submit" class="btn-hover-bg btn btn-primary position-absolute top-0 end-0 py-2 mt-2 me-2">S'inscrire</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Liens utils</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Ministère de la Famille et des Solidarité</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Banque Mondiale</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Ministère de l'Agriculture et de l'Elevage</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> DGPSN</a>
                            {{-- <a href=""><i class="fas fa-angle-right me-2"></i> Beauty of Life</a> --}}
                            {{-- <a href=""><i class="fas fa-angle-right me-2"></i> Present for You</a> --}}
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="mb-4 text-white">Nos horaires</h4>
                            <p><br>
                            Lundi-Vendredi : <strong>9h00 à 17h00</strong></p>
                            {{-- <a href=""><i class="fas fa-angle-right me-2"></i> Karen Dawson</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Jack Simmons</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Michael Linden</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Simon Green</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Natalie Channing</a>
                            <a href=""><i class="fas fa-angle-right me-2"></i> Caroline Gerwig</a> --}}
                        </div>
                    </div>
                    {{-- <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item">
                            <h4 class="mb-4 text-white">Our Gallery</h4>
                            <div class="row g-2">
                                <div class="col-4">
                                    <div class="footer-gallery">
                                        <img src="img/gallery-footer-1.jpg" class="img-fluid w-100" alt="">
                                        <div class="footer-search-icon">
                                            <a href="img/gallery-footer-1.jpg" data-lightbox="footerGallery-1" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                        </div>
                                    </div>
                               </div>
                               <div class="col-4">
                                    <div class="footer-gallery">
                                        <img src="img/gallery-footer-2.jpg" class="img-fluid w-100" alt="">
                                        <div class="footer-search-icon">
                                            <a href="img/gallery-footer-2.jpg" data-lightbox="footerGallery-2" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                        </div>
                                    </div>
                               </div>
                                <div class="col-4">
                                    <div class="footer-gallery">
                                        <img src="img/gallery-footer-3.jpg" class="img-fluid w-100" alt="">
                                        <div class="footer-search-icon">
                                            <a href="img/gallery-footer-3.jpg" data-lightbox="footerGallery-3" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                        </div>
                                    </div>
                               </div>
                                <div class="col-4">
                                    <div class="footer-gallery">
                                        <img src="img/gallery-footer-4.jpg" class="img-fluid w-100" alt="">
                                        <div class="footer-search-icon">
                                            <a href="img/gallery-footer-4.jpg" data-lightbox="footerGallery-4" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                        </div>
                                    </div>
                               </div>
                                <div class="col-4">
                                    <div class="footer-gallery">
                                        <img src="img/gallery-footer-5.jpg" class="img-fluid w-100" alt="">
                                        <div class="footer-search-icon">
                                            <a href="img/gallery-footer-5.jpg" data-lightbox="footerGallery-5" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                        </div>
                                    </div>
                               </div>
                               <div class="col-4">
									<div class="footer-gallery">
										<img src="img/gallery-footer-6.jpg" class="img-fluid w-100" alt="">
                                        <div class="footer-search-icon">
                                            <a href="img/gallery-footer-6.jpg" data-lightbox="footerGallery-6" class="my-auto"><i class="fas fa-search-plus text-white"></i></a>
                                        </div>
									</div>
								</div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-4 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="{{ route('admin.dashboard') }}" target="_blank"><i class="fas fa-copyright text-light me-2"></i>papsa.sn</a>, Tous droits reservés.</span>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="d-flex align-items-center justify-content-center">
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-2"><i class="fab fa-pinterest"></i></a>
                            <a href="#" class="btn-hover-color btn-square text-white me-0"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Par <a class="border-bottom" href="https://devcommunautaire.gouv.sn">Cellule Informatique/MFS</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>

        {{-- MODAL MGP --}}
        <div class="modal fade" id="mgp_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Mécanisme de Gestion des Plaintes</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6>Etes-vous un bénéficiaire d'un projet ou un employé ?</h6>
                    </div>
                    <div class="modal-footer text-center">
                        <a href="{{ route('frontend.plaintes.index', 0) }}" class="btn btn-primary">Je suis bénéficiaire</a>
                        <a href="{{ route('frontend.plaintes.index', 1) }}" class="btn btn-primary">Je suis employé(e)</a>
                    </div>
                </div>
            </div>
        </div>

        @stack('before-scripts')

        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
        <!-- Template Javascript -->
        <script src="{{ asset('lib/main.js') }}"></script>
        {{-- <script src="{{ asset('js/frontend.js') }}"></script> --}}

        @stack('after-scripts')


    </body>
</html>
