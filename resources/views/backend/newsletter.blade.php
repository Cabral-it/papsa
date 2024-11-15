@extends('backend.layouts.app')

@section('title', __('Tableau de bord - Newsletter'))

@section('content')
<x-backend.card>
    <x-slot name="header">
        <h2>Gestion des abonnements</h2>
    </x-slot>
    <x-slot name="body">
        <div class="row">
            <div class="col-sm-6">
                <h3>Ecrire un Newsletter</h3>
                <form action="{{ route('admin.newsletter.store') }}" class="form" method="POST">
                    @csrf
                    @method('Post')
                    <div class="form-group">
                        <label for="object" class="form-label">Objet</label>
                        <input type="text" class="form-control @error('object') is-invalid @enderror" name="object" value="{{ old('object') ?? '' }}">
                        @error('object')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control @error('content') is-invalid @enderror">{{ old('content') ?? ''  }}</textarea>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-block btn-primary" type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Liste des abonnés <span class="badge badge-primary">{{ $emails->count() }}</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emails as $email)
                        <tr>
                            <td>{{ $email->email }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {{ $emails->links() }}
                </div>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Objet</th>
                        <th>Date de création</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newsletters as $newsletter)
                    <tr>
                        <td>{{ $newsletter->id }}</td>
                        <td>{{ $newsletter->object }}</td>
                        <td>{{ $newsletter->created_at }}</td>
                        <td>
                            <a href="{{ route('admin.newsletter.show', $newsletter) }}" class="btn btn-warning m-1" target="_blank">Voir</a>

                            <btn type="button" class="btn btn-danger m-1" onclick="if(confirm('Etes vous sûr de vouloir supprimer ce newsletter')){event.preventDefault();document.getElementById('delete_mail_{{$newsletter->id}}').submit();}">Supprimer</btn>
                            <form action="{{ route('admin.newsletter.delete', $newsletter) }}" id="delete_mail_{{$newsletter->id}}" class="d-none" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </x-slot>
</x-backend.card>

@endsection
