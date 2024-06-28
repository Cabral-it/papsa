
<!DOCTYPE html>
<html>
<head lang="fr-FR" class="supernova">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
    <meta name="HandheldFriendly" content="true" />
    <title>Form Pafsa</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.js">
    <link rel="stylesheet" href="bootstrap/css/style.css">

    <style type="text/css">@media print{*{-webkit-print-color-adjust: exact !important;color-adjust: exact !important;}.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>

    <link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?v=3.3.54452"/>
    <link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_styles.css?3.3.54452" />
    <link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/css/styles/payment/payment_feature.css?3.3.54452" />
    <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">

</head>
<body>
    <div class="bg">
        <img src="{{asset('images/senegalaise.jpg')}}" alt="bg">
    </div>
    <div class="logo text-center text-white mt-2">
        <h1 class="h1-heading">PAPSA</h1>
        <P>Projet d'appui à la protection social adaptative</P>
        <hr>
        <div class="row">
            <div class="col-6">
                <img src="{{ asset('images/flag-senegal.png') }}" alt="sengal" class="senegal">
            </div>
            <div class="col-6">
                <img src="{{ asset('images/bm-logo.png') }}" alt="banque mondial" class="bm">
            </div>
        </div>
    </div>

    <form action="{{ route('frontend.plaintes.store') }}" class="form"  method="post" enctype="multipart/form-data" >
        @csrf
        @method('POST')
        <input type="hidden" name="formID"  />

        <div role="main" class="form-all">
            <ul class="form-section page-section">
                <li class="form-input-wide">
                    <div class="form-header-group  header-large">
                        <div class="header-text httal htvam">
                            <h1 id="header_1" class="form-header" data-component="header">Systeme de gestion des plaintes</h1>
                        </div>
                    </div>
                </li>
                <li class="form-input-wide">
                    <div class="form-header-group  header-default">
                        <div class="header-text httac htvam">
                            <h2 id="header_3" class="form-header" data-component="header">Section 1: LOCALISATION DE LA RECLAMATION</h2>
                        </div>
                    </div>
                </li>
                {{-- Localite --}}
                <li class="form-line">
                    <label class="form-label form-label-top form-label-auto" for="localite">Village/Quartier</label>
                    <div class="form-input-wide">
                        <input type="text" id="localite" name="localite" class="form-textbox @error('localite') is-error @enderror" value="{{ old('localite') }}" />
                        @error('localite')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </li>
                {{-- Commune --}}
                <li class="form-line" >
                    <label class="form-label form-label-top form-label-auto" for="commune">Commune</label>
                    <div class="form-input-wide">
                        <input type="text" id="commune" name="commune" class="form-textbox @error('commune') is-invalid @enderror" value="{{ old('commune') }}" />
                        @error('commune')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </li>
                {{-- Departement --}}
                <li class="form-line">
                    <label class="form-label form-label-top form-label-auto" for="departement">Département</label>
                    <div class="form-input-wide">
                        <input type="text" id="departement" name="departement" class="form-textbox @error('departement') is-invalid @enderror" value="{{ old('departement') }}" />
                        @error('departement')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </li>
                {{-- Region --}}
                <li class="form-line">
                    <label class="form-label form-label-top form-label-auto" for="region">Région</label>
                    <div class="form-input-wide">
                        <input type="text" id="region" name="region" class="form-textbox @error('region') is-invalid @enderror " value="{{ old('region') ?? '' }}"/>
                        @error('region')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </li>
                <li class="form-line" data-type="control_radio" id="id_13"><label class="form-label form-label-top form-label-auto" id="label_13" > Projet concerné</label>
                    <div id="cid_13" class="form-input-wide" data-layout="full">
                        <div class="form-single-column" role="group" aria-labelledby="label_13" data-component="radio">
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" class="form-radio" id="komkom" name="projet" value="0" /><label for="komkom">Projet Yook- Kom Kom </label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" class="form-radio" id="pra" name="projet" value="0" /><label for="pra">Projet de Résilience Agricole (PRA) </label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" class="form-radio" id="pria" name="projet" value="0" /><label for="pria">Projet de réponse à l’insécurité alimentaire</label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" class="form-radio" id="inondation" name="projet" value="0" /><label for="inondation">Inondation</label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" class="form-radio" id="incendie" name="projet" value="0" /><label for="incendie">Incendie</label></span>
                        </div>
                    </div>
                </li>
                {{-- section 2 --}}
                <li id="cid_8">
                    <div class="form-header-group  header-default">
                        <div class="header-text httac htvam">
                            <h2 id="header_8" class="form-header" data-component="header">Section 2: Identification du plaignant</h2>
                        </div>
                    </div>
                </li>
                <li class="form-line">
                    <label class="form-label form-label-top form-label-auto" for="first_9" aria-hidden="false"> Prénom(s) &amp; Nom </label>
                    <div id="cid_9" class="form-input-wide" data-layout="full">
                        <div data-wrapper-react="true">
                            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="first">
                                <input type="text" id="prenom" name="prenom" class="form-textbox @error('prenom') is-invalid @enderror" value="{{ old('prenom') ?? '' }}" autoComplete="section-input_9 given-name" size="10" data-component="first" aria-labelledby="label_9 sublabel_9_first" value="" />
                                <label class="form-sub-label" for="first_9" id="sublabel_9_first" style="min-height:13px">Prénom</label>
                            </span>
                            <span class="form-sub-label-container" style="vertical-align:top" data-input-type="last">
                                <input type="text" id="last_9" name="q9_prenomsamp[last]" class="form-textbox" data-defaultvalue="" autoComplete="section-input_9 family-name" size="15" data-component="last" aria-labelledby="label_9 sublabel_9_last" value=""/>
                                <label class="form-sub-label" for="last_9" id="sublabel_9_last" style="min-height:13px">Nom de famille</label>
                            </span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_radio" id="id_11"><label class="form-label form-label-top form-label-auto" id="label_11" > Sexe </label>
                    <div id="cid_11" class="form-input-wide" data-layout="full">
                        <div class="form-single-column" role="group" aria-labelledby="label_11" data-component="radio">
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" class="form-radio" id="sexe_m" name="sexe" value="0" /><label for="sexe_m">Masculin</label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" class="form-radio" id="sexe_f" name="sexe" value="0" /><label for="sexe_m">Féminin</label></span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_textbox" id="id_12"><label class="form-label form-label-top form-label-auto" id="label_12" for="input_12" aria-hidden="false"> Fonction ou responsabilité </label>
                    <div id="cid_12" class="form-input-wide" data-layout="half"> <input type="text" id="input_12" name="fonction" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" data-component="textbox" aria-labelledby="label_12" value="" /> </div>
                </li>
               
                <li class="form-line" data-type="control_textbox" id="id_15"><label class="form-label form-label-top form-label-auto" id="label_15" for="input_15" aria-hidden="false"> Adresse </label>
                    <div id="cid_15" class="form-input-wide" data-layout="half"> <input type="text" id="input_15" name="adresse" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" data-component="textbox" aria-labelledby="label_15" /> </div>
                </li>
                
                <li class="form-line" data-type="control_textbox" id="id_34"><label class="form-label form-label-top form-label-auto" id="label_34" for="input_34" aria-hidden="false"> Téléphone </label>
                    <div id="cid_34" class="form-input-wide" data-layout="half"> <input type="text" id="input_34" name="entreprise_telephone" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" data-component="textbox" aria-labelledby="label_34" value="" /> </div>
                </li>
                <li class="form-line" data-type="control_radio" id="id_14"><label class="form-label form-label-top form-label-auto" id="label_14" > Structure d’appartenance </label>
                    <div id="cid_14" class="form-input-wide" data-layout="full">
                        <div class="form-single-column" role="group" aria-labelledby="label_14" data-component="radio">
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" class="form-radio" id="papsa" name="structure" value="0" /><label for="papsa">PAPSA</label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" class="form-radio" id="autrestructure" name="structure" value="0" /><label for="autrestructure">Autre structure (préciser) </label></span>
                        </div>
                    </div>
                </li>
                
                <li id="cid_36" class="form-input-wide" data-type="control_head">
                    <div class="form-header-group  header-default">
                        <div class="header-text httac htvam">
                            <h2 id="header_36" class="form-header" data-component="header">Section 3: Description de la réclamation</h2>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_datetime" id="id_40"><label class="form-label form-label-top form-label-auto" id="label_40" for="lite_mode_40" aria-hidden="false"> Date de la plainte </label>
                    <div id="cid_40" class="form-input-wide" data-layout="half">
                        <div data-wrapper-react="true">
                            <div>
                                <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="date" class="form-textbox" id="day_40" name="incident_date" size="2" data-maxlength="2" data-age="" maxLength="2" value="" autoComplete="off" aria-labelledby="label_40 sublabel_40_day" />
                                <span class="date-separate" aria-hidden="true"></span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_radio" id="id_37"><label class="form-label form-label-top form-label-auto" id="label_37" aria-hidden="false"> Objet de la plainte </label>
                    <div id="cid_37" class="form-input-wide" data-layout="full">
                        <div class="form-single-column" role="group" aria-labelledby="label_37" data-component="radio"><span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" aria-describedby="label_37" class="form-radio" id="input_37_0" name="reclamation_type" value="Demande dinformations" /><label id="label_input_37_0" for="input_37_0">Demande d’informations</label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" aria-describedby="label_37" class="form-radio" id="input_37_1" name="reclamation_type" value="Défaut de paiement ou retard de salaire" /><label id="label_input_37_1" for="input_37_1">Défaut de paiement ou retard de salaire </label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" aria-describedby="label_37" class="form-radio" id="input_37_2" name="reclamation_type" value="Litige ou différend entre collègue " /><label id="label_input_37_2" for="input_37_2">Litige ou différend entre collègue </label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" aria-describedby="label_37" class="form-radio" id="input_37_3" name="reclamation_type" value="Litige ou différend avec supérieur hiérarchique" /><label id="label_input_37_3" for="input_37_3">Litige ou différend avec supérieur hiérarchique</label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" aria-describedby="label_37" class="form-radio" id="input_37_4" name="reclamation_type" value="Condition de travail inadéquate" /><label id="label_input_37_4" for="input_37_4">Condition de travail inadéquate (horaires ou temps de travail, congé annuel, congé de maternité, licenciement, travail forcé etc.)</label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" aria-describedby="label_37" class="form-radio" id="input_37_5" name="reclamation_type" value="Défaut de prise en charge sanitaire" /><label id="label_input_37_5" for="input_37_5">Défaut de prise en charge sanitaire</label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" aria-describedby="label_37" class="form-radio" id="input_37_6" name="reclamation_type" value="Accident de travail" /><label id="label_input_37_6" for="input_37_6">Accident de travail</label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" aria-describedby="label_37" class="form-radio" id="input_37_7" name="reclamation_type" value="Dénonciation" /><label id="label_input_37_7" for="input_37_7">Dénonciation (abus de pouvoir ou d’autorité, fraude ou malversation, violence basée sur le genre etc.)</label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" aria-describedby="label_37" class="form-radio" id="input_37_8" name="reclamation_type" value="Erreurs matérielles" /><label id="label_input_37_8" for="input_37_8">Erreurs matérielles</label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" aria-describedby="label_37" class="form-radio" id="input_37_9" name="reclamation_type" value="Erreurs dinclusion" /><label id="label_input_37_9" for="input_37_9">Erreurs d’inclusion</label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" aria-describedby="label_37" class="form-radio" id="input_37_10" name="reclamation_type" value="Erreurs dexclusion" /><label id="label_input_37_10" for="input_37_10">Erreurs d’exclusion</label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" aria-describedby="label_37" class="form-radio" id="input_37_11" name="reclamation_type" value="Autre (préciser)" /><label id="label_input_37_11" for="input_37_11">Autre (préciser)</label></span>
                    </div>
                </li>
                <li class="form-line" data-type="control_textarea" id="id_38"><label class="form-label form-label-top form-label-auto" id="label_38" for="input_38" aria-hidden="false">Décrivez les détails de votre plainte</label>
                    <div id="cid_38" class="form-input-wide" data-layout="full"> <textarea id="input_38" class="form-textarea" name="detail-plainte" style="width:648px;height:163px" data-component="textarea" aria-labelledby="label_38"></textarea> </div>
                </li>
                <li class="form-line" data-type="control_radio" id="id_15"><label class="form-label form-label-top form-label-auto" id="label_15" >Avez-vous des éléments de preuve ou des justificatifs à joindre ?</label>
                    <div id="cid_15" class="form-input-wide" data-layout="full">
                        <div class="form-single-column" role="group" aria-labelledby="label_15" data-component="radio">
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" class="form-radio" id="oui" name="justificatif" value="0" /><label for="oui">Oui (si oui, joindre au formulaire)</label></span>
                            <span class="form-radio-item" style="clear:left"><span class="dragger-item"></span>
                            <input type="radio" class="form-radio" id="non" name="justificatif" value="0" /><label for="non">Non</label></span>
                        </div>
                    </div>
                </li>

                <li class="form-line" data-type="control_datetime" id="id_16"><label class="form-label form-label-top form-label-auto" id="label_16" for="lite_mode_16" aria-hidden="false"> Donnez la date de l’événement (si possible)</label>
                    <div id="cid_16" class="form-input-wide" data-layout="half">
                        <div data-wrapper-react="true">
                            <div>
                                <span class="form-sub-label-container" style="vertical-align:top">
                                <input type="date" class="form-textbox" id="day_16" name="date_even" size="2" data-maxlength="2" data-age="" maxLength="2" value="" autoComplete="off" aria-labelledby="label_16 sublabel_16_day" />
                                <span class="date-separate" aria-hidden="true"></span>
                        </div>
                    </div>
                </li>
                <li class="form-line" data-type="control_textarea" id="id_46"><label class="form-label form-label-top form-label-auto" id="label_46" for="input_46" aria-hidden="false">Décrivez la solution souhaitée (si possible)</label>
                    <div id="cid_46" class="form-input-wide" data-layout="full"> <textarea id="input_46" class="form-textarea" name="solution" style="width:648px;height:100px" data-component="textarea" aria-labelledby="label_46"></textarea> </div>
                </li>
                <!-- <li class="form-line" data-type="control_fileupload" id="id_48"><label class="form-label form-label-top form-label-auto" id="label_48" for="input_48" aria-hidden="false"> Photo </label>
                    <div id="cid_48" class="form-input-wide" data-layout="full">
                        <div class="jfQuestion-fields" data-wrapper-react="true">
                            <div class="jfField isFilled">
                                <div class="jfUpload-wrapper">
                                    <div class="jfUpload-container">
                                        <div class="jfUpload-button-container">
                                            <div class="jfUpload-button" aria-hidden="true" tabindex="0" style="display:none" data-version="v2">Parcourir les fichiers<div class="jfUpload-heading forDesktop">Glissez-déposez des fichiers ici</div>
                                            <div class="jfUpload-heading forMobile">Choisissez un fichier</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jfUpload-files-container">
                                    <div class="validate[multipleUpload]"><input type="file" id="input_48" name="q48_envoiDe[]" multiple="" class="form-upload-multiple" data-imagevalidate="yes" data-file-accept="pdfi, jpg, jpeg, png, gif" data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" aria-label="Parcourir les fichiers" /></div>
                                </div>
                            </div>
                            <div data-wrapper-react="true"></div>
                        </div><span style="display:none" class="cancelText">Cancel</span><span style="display:none" class="ofText">of</span>
                    </div>
                </div>
            </li>
            <li class="form-line" data-type="control_fileupload" id="id_49"><label class="form-label form-label-top form-label-auto" id="label_49" for="input_49" aria-hidden="false"> Pièces jointes </label>
                <div id="cid_49" class="form-input-wide" data-layout="full">
                    <div class="jfQuestion-fields" data-wrapper-react="true">
                        <div class="jfField isFilled">
                            <div class="jfUpload-wrapper">
                                <div class="jfUpload-container">
                                    <div class="jfUpload-button-container">
                                        <div class="jfUpload-button" aria-hidden="true" tabindex="0" style="display:none" data-version="v2">Parcourir les fichiers<div class="jfUpload-heading forDesktop">Glissez-déposez des fichiers ici</div>
                                        <div class="jfUpload-heading forMobile">Choisissez un fichier</div>
                                    </div>
                                </div>
                            </div>
                            <div class="jfUpload-files-container">
                                <div class="validate[multipleUpload]"><input type="file" id="input_49" name="q49_envoiDe49[]" multiple="" class="form-upload-multiple" data-imagevalidate="yes" data-file-accept="pdf, doc, docx, xls, xlsx, jpg, jpeg, png, gif" data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" aria-label="Parcourir les fichiers" /></div>
                            </div>
                        </div>
                        <div data-wrapper-react="true"></div>
                    </div><span style="display:none" class="cancelText">Cancel</span><span style="display:none" class="ofText">of</span>
                </div>
            </div>
        </li>
        <li class="form-line" data-type="control_fileupload" id="id_50"><label class="form-label form-label-top form-label-auto" id="label_50" for="input_50" aria-hidden="false"> Signature </label>
            <div id="cid_50" class="form-input-wide" data-layout="full">
                <div class="jfQuestion-fields" data-wrapper-react="true">
                    <div class="jfField isFilled">
                        <div class="jfUpload-wrapper">
                            <div class="jfUpload-container">
                                <div class="jfUpload-button-container">
                                    <div class="jfUpload-button" aria-hidden="true" tabindex="0" style="display:none" data-version="v2">Parcourir les fichiers<div class="jfUpload-heading forDesktop">Glissez-déposez des fichiers ici</div>
                                    <div class="jfUpload-heading forMobile">Choisissez un fichier</div>
                                </div>
                            </div>
                        </div>
                        <div class="jfUpload-files-container">
                            <div class="validate[multipleUpload]"><input type="file" id="input_50" name="q50_envoiDe50[]" multiple="" class="form-upload-multiple" data-imagevalidate="yes" data-file-accept="pdf, jpg, jpeg, png, gif" data-file-maxsize="10854" data-file-minsize="0" data-file-limit="" data-component="fileupload" aria-label="Parcourir les fichiers" /></div>
                        </div>
                    </div>
                    <div data-wrapper-react="true"></div>
                </div><span style="display:none" class="cancelText">Cancel</span><span style="display:none" class="ofText">of</span>
            </div>
        </div>
    </li> -->
  <!--   <li id="cid_53" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-small">
            <div class="header-text httal htvam">
                <h3 id="header_53" class="form-header" data-component="header">Coordonnées GPS de la réclamation (si possible)</h3>
            </div>
        </div>
    </li>
    <li class="form-line" data-type="control_textbox" id="id_54"><label class="form-label form-label-top form-label-auto" id="label_54" for="input_54" aria-hidden="false"> Latitude (x.y°) </label>
        <div id="cid_54" class="form-input-wide" data-layout="half"> <input type="text" id="input_54" name="latitude" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" data-component="textbox" aria-labelledby="label_54" value="" /> </div>
    </li>
    <li class="form-line" data-type="control_textbox" id="id_56"><label class="form-label form-label-top form-label-auto" id="label_56" for="input_56" aria-hidden="false"> Longitude (x.y°) </label>
        <div id="cid_56" class="form-input-wide" data-layout="half"> <input type="text" id="input_56" name="longitude" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" data-component="textbox" aria-labelledby="label_56" value="" /> </div>
    </li>
    <li class="form-line" data-type="control_textbox" id="id_55"><label class="form-label form-label-top form-label-auto" id="label_55" for="input_55" aria-hidden="false"> Altitude (m) </label>
        <div id="cid_55" class="form-input-wide" data-layout="half"> <input type="text" id="input_55" name="altitude" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" data-component="textbox" aria-labelledby="label_55" value="" /> </div>
    </li>
    <li class="form-line" data-type="control_textbox" id="id_30"><label class="form-label form-label-top form-label-auto" id="label_30" for="input_30" aria-hidden="false"> Précision (m) </label>
        <div id="cid_30" class="form-input-wide" data-layout="half"> <input type="text" id="input_30" name="precision" data-type="input-textbox" class="form-textbox" data-defaultvalue="" style="width:310px" size="310" data-component="textbox" aria-labelledby="label_30" value="" /> </div>
    </li> -->
    <li class="form-line" data-type="control_button" id="id_2">
        <div id="cid_2" class="form-input-wide" data-layout="full">
            <div data-align="auto" class="form-buttons-wrapper form-buttons-auto   jsTest-button-wrapperField"><button id="input_2" type="submit" class="form-submit-button submit-button jf-form-buttons jsTest-submitField" data-component="button" data-content="">Soumission</button></div>
        </div>
    </li>
    <li style="display:none">Should be Empty: <input type="text" name="website" value="" type="hidden" /></li>
</ul>
</div>
</form>


</body>
</html>
