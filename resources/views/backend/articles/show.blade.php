@extends('backend.layouts.app')

@section('title', __('Dashboard - Prévisualiser un Article'))

@section('content')
<x-backend.card>
    <x-slot name="header">
        <div>
            <a href="{{ route('admin.article.edit', $article) }}" class="btn btn-warning m-1">Modifier</a>
            {{-- <a href="#" class="btn btn-danger m-1">Supprimer</a> --}}
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteArticle">
                Supprimer
            </button>
        </div>
    </x-slot>
    <x-slot name="body">
        <div class="row mb-2">
            <h5 class="col-2">Titre</h5>
            <h2 class="col-10 fw-bolder">{{ $article->title }}</h2>
        </div>
        <div class="row">
            <h5 class="col-2">Image</h5>
            <div class="col-10"><img src="{{ asset('storage/' . $article->image) }}" alt="Image" class="img-fluid" width="500px"></div>
        </div>
        <div class="row">
            <h5 class="col-2">Détails</h5>
            <div class="col-10">
                <div class="row">
                    <h6 class="col-2">Publié :</h6>
                    <div class="col-10">
                        @if ($article->publish)
                        <div>
                            <span class="badge badge-success">OUI</span>
                            <p>Le ...</p>
                        </div>
                        @else
                        <span class="badge badge-danger">NON</span>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <h6 class="col-2">Créer le</h6>
                    <span class="col-10">{{ $article->created_at }}</span>
                </div>
                <div class="row">
                    <h6 class="col-2">Par</h6>
                    <span class="col-10">Admin</span>
                </div>
            </div>
        </div>
        <div class="row">
            <h5 class="col-2">Contenu</h5>
            <div class="col-10">
                {{ $article->content }}
            </div>
        </div>

    </x-slot>
</x-backend.card>
@endsection

@push('before-scripts')
<div class="modal fade" id="deleteArticle" tabindex="-1" aria-labelledby="deleteArticleLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Suppression de l'article</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="display-5">Etes-vous sûr de vouloir supprimer cette article ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                <a href="#" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('formDelete').submit();">Supprimer</a>
                <form action="{{ route('admin.article.delete', $article) }}" id="formDelete" method="POST" class="d-none">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
</div>
@endpush
