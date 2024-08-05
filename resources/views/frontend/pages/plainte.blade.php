@extends('frontend.layouts.app')

@section('title', 'Mécanisme de gestion des plaintes')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Mécanisme de Gestion des Plaintes</h1>
        <p class="fs-5 text-white mb-4"> Je suis  {{ $type == 1 ? "Travailleur" : "Bénéficiaire"  }}</p>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Accueil</a></li>
            <li class="breadcrumb-item active text-white">MGP</li>
        </ol>
    </div>
</div>
<!-- Header End -->


<div class="container-fluid py-5">
    <div class="container text-center mb-2"><h2>Formulaire d'enregistrement de plainte pour {{ $type ? 'Travailleurs' : 'Bénéficiaires' }}</h2></div>
    <div class="container mt-3">
        <form action="{{ route('frontend.plaintes.store') }}" class="form" max-width="800px"  method="post" enctype="multipart/form-data" >
            @csrf
            @method('POST')
            <input type="hidden" name="type" class="d-none" value="{{ $type == 1 ? '1' : '0' }}">

            <div class="text-center text-primary mb-4">
                <h3>Section 1: Localisation de la réclamation</h3>
            </div>
            {{-- Region --}}
            <div class="form-group row mt-2">
                <label class="form-label col-sm-4" for="region">Région</label>
                <div class="form-input-group col-sm-8">
                    <select class="form-control @error('region') is-invalid @enderror" name="region" id="region">
                        <option value="">Selectionnez une région</option>
                        @foreach ($regions as $region)
                        <option value="{{ $region->id }}">{{ $region->libele }}</option>
                        @endforeach
                    </select>
                    @error('region')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <hr>
            {{-- Departement --}}
            <div class="form-group row mt-3">
                <label class="form-label col-sm-4" for="departement">Département</label>
                <div class="form-input-group col-sm-8">
                    <select class="form-control @error('departement') is-invalid @enderror" name="departement" id="departement">
                        <option value="">Selectionnez un département</option>
                    </select>
                    @error('departement')
                    <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <hr>
            {{-- Commune --}}
            <div class="form-group row mt-3">
                <label class="form-label col-sm-4" for="commune">Commune</label>
                <div class="form-input-group col-sm-8">
                    <input type="text" id="commune" name="commune" class="form-control @error('commune') is-invalid @enderror" value="{{ old('commune') }}" />
                    @error('commune')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <hr>
            {{-- Localite --}}
            <div class="form-group row mt-3">
                <label class="form-label col-sm-4" for="localite">Village/Quartier</label>
                <div class="form-input-group col-sm-8">
                    <input type="text" id="localite" name="localite" class="form-control @error('localite') is-invalid @enderror" value="{{ old('localite') }}" />
                    @error('localite')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>
            </div>
            <hr>
            @if ($type == 0)
            {{-- Projet --}}
            <div class="form-group row mt-3">
                <label class="form-label col-sm-4"> Projet concerné</label>
                <div class="form-input-group col-sm-8">
                    @foreach($projets as $projet)
                    <div class="form-check">
                        <input type="radio" class="form-check-input @error('projet') is-invalid @enderror" id="projet-{{$projet->id}}" name="projet" value="{{ $projet->id}}"/>
                        <label for="projet-{{$projet->id}}">{{ $projet->libele }}</label>
                    </div>
                    @endforeach
                    @error('projet')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>
            </div>
            <hr>
            @endif

            {{-- section 2 --}}
            <div class="text-center text-primary my-4">
                <h2>Section 2: Identification du plaignant</h2>
            </div>
            {{-- Prenom --}}
            <div class="form-group row mt-2">
                <label class="form-label col-sm-4" for="prenom">Prénom(s)</label>
                <div class="form-input-group col-sm-8">
                    <input type="text" id="prenom" name="prenom" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom') ?? '' }}" />
                    @error('prenom')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>
            </div>
            <hr>
            {{-- Nom --}}
            <div class="form-group row mt-3">
                <label class="form-label col-sm-4" for="nom">Nom de famille</label>
                <div class="form-input-group col-sm-8">
                    <input type="text" id="nom" name="nom" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom') }}"/>
                    @error('nom')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>
            </div>
            <hr>
            {{-- Sexe --}}
            <div class="form-group row mt-3">
                <label class="form-label col-sm-4" for="sexe">Sexe</label>
                <div class="form-input-group col-sm-8">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="sexe_m" name="sexe" value="1" />
                        <label for="sexe_m">Masculin</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="sexe_f" name="sexe" value="0" />
                        <label for="sexe_f">Féminin</label>
                    </div>
                    @error('sexe')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>
            </div>
            <hr>
            {{-- Fonction --}}
            <div class="form-group row mt-3">
                <label class="form-label col-sm-4" for="fonction">Fonction ou responsabilité </label>
                <div class="form-input-group col-sm-8">
                    <input type="text" id="fonction" name="fonction" class="form-control @error('fonction') is-invalid @enderror" value="{{ old('fonction') ?? '' }}"/>
                    @error('fonction')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>
            </div>
            <hr>
            {{-- Adresse --}}
            <div class="form-group row mt-3">
                <label class="form-label col-sm-4" for="adresse">Adresse</label>
                <div class="form-input-group col-sm-8">
                    <input type="text" id="adresse" name="adresse" class="form-control @error('adresse') is-invalid @enderror" value="{{ old('adresse') ?? '' }}"/>
                    @error('adresse')<span cla!ss="invalid-feedback">{{ $message }}</span>@enderror
                </div>
            </div>
            <hr>
            {{-- Telephone --}}
            <div class="form-group row mt-3">
                <label class="form-label col-sm-4" for="telephone">Téléphone</label>
                <div class="form-input-group col-sm-8">
                    <input type="text" id="telephone" name="telephone" class="form-control @error('telephone') is-invalid @enderror" value="{{ old('telephone') ?? '' }}"/>
                    @error('telephone')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>
            </div>
            <hr>
            @if ($type == 1)
            {{-- Entreprise --}}
            <div class="form-group row mt-3">
                <label class="form-label col-sm-4"> Structure d’appartenance </label>
                <div class="form-input-group col-sm-8">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="papsa" name="entreprise" value="1"/>
                        <label for="papsa">PAPSA</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="autre" name="entreprise" value="0"/>
                        <label for="autre">Autre structure (préciser)</label>
                    </div>
                    {{-- Nom de l'entreprise --}}
                    <div class="form-group">
                        <label for="entreprise_name" class="text-primary">Nom de l'entreprise</label>
                        <input type="text" id="entreprise_name"class="form-control @error('entreprise_name') is-invalid @enderror" name="entreprise_name"  value="{{ old('entreprise_name') ?? '' }}"/>
                        @error('entreprise_name')<span class="invalid-feedback">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <hr>
            @endif

            {{-- section 3 --}}
            <div class="text-center text-primary my-4">
                <h2>Section 3 : Description de la réclamation</h2>
            </div>
            {{-- Objet de reclamation --}}
            <div class="form-group row mt-3">
                <label class="form-label col-sm-4">Objet de la plainte</label>
                <div class="form-group col-sm-8">
                    <div class="row">
                        @foreach ($reclamations as $objet)
                            <div class="form-check col-6">
                                <input type="radio" class="form-check-input" id="reclamation_{{$objet->id}}" name="reclamation_type" value="{{ $objet->id }}"/>
                                <label class="form-check-label" for="reclamation_{{$objet->id}}">{{ $objet->libele }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <hr>
            {{-- Description Réclammation --}}
            <div class="form-group row mt-3">
                <label class="form-label col-sm-4" for="reclamation_description">Décrivez les détails de votre plainte</label>
                <div class="form-input-group col-sm-8">
                    <textarea id="reclamation_description" class="form-control @error('reclamation_description') is-invalid @enderror" name="reclamation_description" rows="4">{{ old('reclamation_description') ?? '' }}</textarea>
                </div>
            </div>
            <hr>
            {{-- Preuve --}}
            <div class="form-group row mt-3">
                <label class="form-label col-sm-4">Avez-vous des éléments de preuve ou des justificatifs à joindre ?</label>
                <div class="form-input-group col-sm-8">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="oui" name="preuve" value="1"/>
                        <label for="oui">Oui (si oui, joindre au formulaire)</label>
                    </div>
                    <input type="file" name="pj" class="form-control"><hr>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="non" name="preuve" value="0"/>
                        <label for="non">Non</label>
                    </div>
                    @error('preuve')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>
            </div>
            <hr>
            {{-- Date Incident --}}
            <div class="form-group row mt-3">
                <label class="form-label col-sm-4" for="incident_date">Donnez la date de l’événement (si possible)</label>
                <div class="form-input-group col-sm-8">
                    <input type="date" class="form-control" id="incident_date" name="incident_date" size="2" maxLength="2" value="{{ old('incident_date') }}"/>
                    @error('incident_date')<span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>
            </div>
            <hr>
            {{-- Solutions --}}
            <div class="form-group row mt-3">
                <label class="form-label col-sm-4" for="solutions">Décrivez la solution souhaitée (si possible)</label>
                <div class="form-input-group col-sm-8">
                    <textarea id="solutions" class="form-control" rows="4" name="solutions">{{ old('solutions') ?? '' }}</textarea>
                    @error('solutions') <span class="invalid-feedback">{{ $message }}</span>@enderror
                </div>
            </div>
            <hr>
            {{-- soumettre --}}
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Soumission</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('after-scripts')
    <script type="text/javascript">
        // Selection des departement en fonction de la region
        $('#region').on('change', function(e) {
            // On recupere l'id de la region et on construit le lien
            var region_id = this.value;
            var url = '{!! route("frontend.plaintes.dep", ":id") !!}';
            var full_url = url.replace(':id', region_id);
            // On fait une requete get sur le serveur
            $.get(full_url, {
                // _token : token,
                region : this.value
            }).done(function (response) {
                // En cas de reussite
                // On reinitialise la selection des departement
                var select = document.getElementById('departement');
                select.innerHTML = '';
                var opt = document.createElement('option');
                opt.innerHTML = 'Selectionnez un département';
                select.appendChild(opt);
                for (var i = 0; i <= response.length; i++){
                    var opt = document.createElement('option');
                    opt.value = response[i].id;
                    opt.innerHTML = response[i].libele;
                    select.appendChild(opt);
                }
            }).fail(function (error) {
                console.log('error');
                // On alerte avec une
                alert("Erreur : " + error.statusText);
            });
        });
    </script>
@endpush
