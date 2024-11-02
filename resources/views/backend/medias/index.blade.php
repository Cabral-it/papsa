@extends('backend.layouts.app')

@section('title', __('Dashboard - Médiathèque'))

@section('content')
<x-backend.card>
    <x-slot name="header">
        <h2>Gestion des médias</h2>
    </x-slot>
    <x-slot name="body">
        <form action="{{ route('admin.media.store') }}" method="POST" class="form row" enctype="multipart/form-data">
            <div class="form-group col-sm-6">
                @csrf
                @method('POST')
                <label for="type" class="form-label">Type de media</label>
                <select name="type"  class="form-control @error('type') is-invalid @enderror" id="type">
                    <option value="Document">Document</option>
                    <option value="Image">Image</option>
                    <option value="Video">Video</option>
                </select>
                @error('type')
                    <span class="invalid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-sm-6">
                <div class="form-check mb-3">
                    <input type="checkbox" name="publish" id="publish" class="form-check-input @error('publish') is-invalid @enderror">
                    <label for="publish" class="form-check-label">Publier</label>
                    @error('publish')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group col-sm-6">
                <label for="title" class="form-label">Titre du Media</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-inavlid @enderror">
                @error('title')
                <span class="inavlid-feedback">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group col-sm-6">
                <label for="file" class="form-label">Fichier</label>
                <input type="file" id="file" class="form-control @error('file') is-invalid @enderror" name="file">
                @error('file')
                <span class="invalid-feedback">{{ $message }}</ span>
                @enderror
            </div>
            <div class="form-group col-sm-12">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
            </div>
        </form>
        {{ $medias->links() }}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type</th>
                    <th scope="col">Titre</th>
                    <th scope="col">ajouté le</th>
                    <th scope="col">publier</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($medias as $media)
                <tr>
                    <th scope="row">{{ $media->id }}</th>
                    <td class="fw-bolder">{{ $media->title }}</td>
                    <td class="fw-bolder">{{ $media->type}}</td>
                    <td>{{ $media->created_at }}</td>
                    <td>
                        @if ($media->publish == true)
                        <span class="badge badge-success">publié</span>
                        @else
                        <span class="badge badge-danger">non publié</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.media.download', $media) }}" data-target="_blank" class="btn btn-sm btn-info m-1">Télécharger</a>
                        @if ($media->publish == false)
                        <a href="{{ route('admin.media.publish', $media) }}" class="btn btn-sm btn-success m-1">Publier</a>
                        @else
                        <a href="{{ route('admin.media.publish', $media) }}" class="btn btn-sm btn-primary m-1">Cacher</a>
                        @endif
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteMedia_{{ $media->id }}">
                            Supprimer
                        </button>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $medias->links() }}
    </x-slot>
</x-backend.card>




@endsection

@push('before-scripts')
    @foreach ($medias as $media)
    <div class="modal fade" id="deleteMedia_{{ $media->id }}" tabindex="-1" aria-labelledby="deleteMedia_{{ $media->id }}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Suppression du media</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="display-5">Etes-vous sûr de vouloir supprimer ce media ?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <a href="#" class="btn btn-danger" onclick="event.preventDefault();document.getElementById('formDelete{{$media->id}}').submit();">Supprimer</a>
                    <form action="{{ route('admin.media.delete', $media) }}" id="formDelete{{$media->id}}" method="POST" class="d-none">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endpush
