@extends('backend.layouts.app')

@section('title', __('Dashboard'))

@section('content')
<div class="row">
    <div class="col-sm-6">
        <x-backend.card>
            <x-slot name="header">
                <h3>Actualités</h3>
            </x-slot>

            <x-slot name="body">
                <div class="d-flex justify-content-between">
                    <span>Total articles</span>
                    <span><span class="badge badge-secondary">{{ $articleStat['total'] }}</span></span>
                </div><hr>
                <div class="d-flex justify-content-between">
                    <span>Articles publiés</span>
                    <span><span class="badge badge-secondary">{{ $articleStat['published'] }}</span></span>
                </div><hr>
                <div class="d-flex justify-content-between">
                    <span>Articles non publiés</span>
                    <span><span class="badge badge-secondary">{{ $articleStat['total'] - $articleStat['published'] }}</span></span>
                </div>
                <div class="mt-2">
                    <a href="{{ route('admin.article.index') }}" class="btn btn-primary">Gerer les articles</a>
                </div>
            </x-slot>
        </x-backend.card>
    </div>
    <div class="col-sm-6">
        <x-backend.card>
            <x-slot name="header">
                <h3>Mécaisme de gestion des plaintes</h3>
            </x-slot>

            <x-slot name="body">
                <div class="d-flex justify-content-between">
                    <span>Total Plaintes</span>
                    <span><span class="badge badge-secondary">127</span></span>
                </div><hr>
                <div class="d-flex justify-content-between">
                    <span>Plaintes en cours d'examen</span>
                    <span><span class="badge badge-secondary">112</span></span>
                </div><hr>
                <div class="d-flex justify-content-between">
                    <span>Plaintes en attentes</span>
                    <span><span class="badge badge-secondary">15</span></span>
                </div>
                <div class="mt-2">
                    <a href="#" class="btn btn-primary">Gestion des plaintes</a>
                </div>
            </x-slot>
        </x-backend.card>
    </div>
</div>
<div class="section">
    <x-backend.card>
        <x-slot name="header">
            <h3>Gestion des Slides</h3>
        </x-slot>
        <x-slot name="body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">description</th>
                        <th scope="col">Modifié le</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slides as $slide)
                        <tr>
                            <form action="{{ route('admin.slide.update', $slide) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <td>{{ $slide->id }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $slide->image) }}" alt="image" class="img-fluid" width="79px" height="auto">
                                    <label for="image_slide_{{ $slide->id }}" class="form-label">Remplacer l'image</label>
                                    <input class="form-control form-control-sm" id="image_slide_{{ $slide->id }}" type="file" name="image">
                                </td>
                                <td>
                                    <textarea name="description" cols="50" rows="2">{{ $slide->description }}</textarea>
                                </td>
                                <td>{{ $slide->updated_at }}</td>
                                <td>
                                    @if ($slide->status)
                                    <div class="d-flex justify-content-between">
                                        <button type="submit" class="btn btn-success btn-sm m-1">Enregistrer</button>
                                        <a href="{{ route('admin.slide.disable', $slide) }}" class="btn btn-danger btn-sm m-1">Désactiver</a>
                                    </div>
                                    @else
                                        <a href="{{ route('admin.slide.enable', $slide) }}" class="btn btn-success btn-sm m-1">Activer</a>
                                    @endif
                                </td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </x-slot>
    </x-backend.card>
</div>
@endsection
