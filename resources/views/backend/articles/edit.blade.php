@extends('backend.layouts.app')

@section('title', __('Dashboard - Editer un Article'))

@section('content')
<x-backend.card>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2>Modification d' un article</h2>
        </div>
    </x-slot>
    <x-slot name="body">
        <form class="form" action="{{ route('admin.article.update', $article) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group mb-3">
                <label for="image" class="form-label">Accrocher une image</label>
                <input type="file" name="image" id="image" class="form-control @error('iamge') is-inavlid @enderror" value="{{ old($article->image) }}">
                <a href="{{ asset('storage/' . $article->image) }} }}">{{ asset('storage/' . $article->image) }}</a>
                @error('image')
                    <span class="inavlid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="title" class="form-label">Titre</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $article->title }}">
                @error('title')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="content" class="form-label">Contenu</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{ old('content') ?? $article->content }}</textarea>
                @error('content')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" name="publish" id="publish" class="form-check-input" @if(old('publish') || $article->publish ) checked @endif>
                <label for="publish" class="form-check-label">Publier</label>
            </div>
            <div class="form-group mb3">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </form>
    </x-slot>
</x-backend.card>
@endsection
