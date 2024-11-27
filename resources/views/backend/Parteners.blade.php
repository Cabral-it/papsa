@extends('backend.layouts.app')

@section('title', __('Tableau de bord - Nos Partenaires'))

@section('content')
<x-backend.card>
    <x-slot name="header">
        <h2>Gestion des Partenaires</h2>
    </x-slot>
    <x-slot name="body">
        <div class="row">
            <div class="col-sm-6">
                <h3>Ajouter un Partenaire</h3>
                <form action="{{ route('admin.section.partener.store') }}" class="form" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('Post')
                    <div class="form-group">
                        <label for="libele" class="form-label">Nom du partenaire</label>
                        <input type="text" class="form-control @error('libele') is-invalid @enderror" name="libele" value="{{ old('libele') ?? '' }}">
                        @error('libele')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="logo" class="form-label">Message</label>
                        <input type="file" name="logo" id="logo" class="form-control @error('logo') is-invalid @enderror">
                        @error('libele')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-block btn-primary" type="submit">Ajouter</button>
                    </div>
                </form>
            </div>
        </div>

        <h3>Les partenaires</h3>
        <div class="row">
            @foreach ($parteners as $partener)
            <div class="col-sm-2">
                <div class="card">
                    <img src="{{ asset('storage/' . $partener->logo) }}" class="card-img-top" alt="{{ $partener->libele }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $partener->libele }}</h5>
                        <button class="btn btn-sm btn-danger" type="button" aria-label="Supprimer" onclick="event.preventDefault();if(confirm('Etes-vous sûr de vouloir supprimer ce partenaires ?')){document.getElementById('delete_partener_{{$partener->id}}').submit();}">x</button>
                        <form action="{{ route('admin.section.partener.delete', $partener) }}" method="post" class="d-none" id="delete_partener_{{$partener->id}}">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </x-slot>
</x-backend.card>

@endsection
