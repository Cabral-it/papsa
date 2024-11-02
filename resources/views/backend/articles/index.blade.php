@extends('backend.layouts.app')

@section('title', __('Dashboard - Gestion des Articles'))

@section('content')
<x-backend.card>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2>Gestion des articles</h2>
            <a href="{{ route('admin.article.create') }}" class="btn btn-primary">Ajouter un article</a>
        </div>
    </x-slot>
    <x-slot name="body">

        {{ $articles->links() }}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titre</th>
                    <th scope="col">ajouté le</th>
                    <th scope="col">publier</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{ $article->id }}</th>
                    <td class="fw-bolder">{{ $article->title }}</td>
                    <td>{{ $article->created_at }}</td>
                    <td>
                        @if ($article->publish == true)
                        <span class="badge badge-success">publié</span>
                        @else
                        <span class="badge badge-danger">non publié</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.article.show', $article) }}" class="btn btn-info m-1">Voir</a>

                        @if ($article->publish == false)
                        <a href="#" class="btn btn-success m-1" onclick="event.preventDefault();document.getElementById('delete_article_{{ $article->id }}').submit();">Publier</a>
                        @else
                        <a href="#" class="btn btn-secondary m-1" onclick="event.preventDefault();document.getElementById('delete_article_{{ $article->id }}').submit();">Cacher</a>
                        @endif
                        <form action="{{ route('admin.article.publish', $article) }}" class="d-none" id="delete_article_{{ $article->id }}" method="POST">
                            @csrf
                            @method('POST')
                        </form>
                        <a href="{{ route('admin.article.edit', $article) }}" class="btn btn-warning m-1">Modifier</a>
                        {{-- <a href="#" class="btn btn-danger m-1">Supprimer</a> --}}
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteArticle{{ $article->id }}">
                            Supprimer
                        </button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $articles->links() }}
    </x-slot>
</x-backend.card>


@endsection

@push('before-scripts')
    @foreach ($articles as $article)
    <div class="modal fade" id="deleteArticle{{ $article->id }}" tabindex="-1" aria-labelledby="deleteArticle{{ $article->id }}Label" aria-hidden="true">
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
                    <a href="#" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('formDelete{{$article->id}}').submit();">Supprimer</a>
                    <form action="{{ route('admin.article.delete', $article) }}" id="formDelete{{$article->id}}" method="POST" class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endpush
