@if ($user->hasTwoFactorEnabled())
    {{-- BreadCrumbrs --}}
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h3 class="text-white display-3 mb-4">Authentification à 2 facteurs</h1>
            <p class="fs-5 text-white mb-4"> Renforcer le système de protection social est en lien avec la vision de la politique sociale du gouvernement axée sur la réduction des inégalités sociales et l'éradication de la pauvreté.</p>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Accueil</a></li>
                {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
                <li class="breadcrumb-item active text-white">Administration</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
    {{-- BreadCrumbrs --}}
    <div class="container pt-5">
        <span class="badge badge-success" data-toggle="tooltip" title="{{ timezone()->convertToLocal($user->twoFactorAuth->enabled_at) }}">@lang('Yes')</span>
    </div>
@else
    <span class="badge badge-danger">@lang('No')</span>
@endif
