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
@endsection
