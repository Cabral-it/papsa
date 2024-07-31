@extends('frontend.layouts.app')

@section('title', __('Verify Your E-mail Address'))

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Authentification</h1>
        <p class="fs-5 text-white mb-4"> Renforcer le système de protection social est en lien avec la vision de la politique sociale du gouvernement axée sur la réduction des inégalités sociales et l'éradication de la pauvreté.</p>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Accueil</a></li>
            {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
            <li class="breadcrumb-item active text-white">Réinitialisation du compte</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <x-frontend.card>
                <x-slot name="header">
                    @lang('Verify Your E-mail Address')
                </x-slot>

                <x-slot name="body">
                    @lang('Before proceeding, please check your email for a verification link.')
                    @lang('If you did not receive the email')
                    <x-forms.post :action="route('frontend.auth.verification.resend')" class="d-inline">
                        <button class="btn btn-link p-0 m-0 align-baseline" type="submit">@lang('click here to request another').</button>
                    </x-forms.post>
                </x-slot>
            </x-frontend.card>
        </div><!--col-md-8-->
    </div><!--row-->
</div><!--container-->
@endsection
