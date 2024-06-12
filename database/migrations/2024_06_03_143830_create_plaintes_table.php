<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaintesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plaintes', function (Blueprint $table) {
            $table->id();
            // Section 1 Localisation reclamation
            $table->string('localite')->nullable();
            $table->string('commune')->nullable();
            $table->string('departement')->nullable();
            $table->string('region')->nullable();
            // Section 2 Identification du plaignant
            $table->string('prenom')->nullable();
            $table->string('nom')->nullable();
            $table->boolean('sexe')->nullable();
            $table->string('fonction')->nullable();
            $table->unsignedBigInteger('identification_id')->nullable(); // cni
            $table->string('identification_numero')->nullable(); // numero cni
            $table->unsignedBigInteger('entreprise_id')->nullable();
            $table->string('entreprise_name')->nullable();
            $table->string('entreprise_contact')->nullable();
            $table->bigInteger('entreprise_telephone')->nullable();
            $table->string('entreprise_email')->nullable();
            // Section 3 Description de la réclamation
            $table->unsignedBigInteger('reclamation_type')->nullable();
            $table->text('reclamation_synthese')->nullable();
            $table->date('incident_date');
            $table->text('incident_description')->nullable();
            $table->text('incident_happen')->nullable();
            $table->string('incident_lieu')->nullable();
            $table->string('incident_victime')->nullable();
            $table->text('consequences')->nullable();
            $table->text('solutions')->nullable();
            $table->string('photo')->nullable();
            $table->string('pj')->nullable();
            $table->string('signature')->nullable();
            // Section 4 Coordonnées GPS de la réclamation
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('altitude')->nullable();
            $table->string('precision')->nullable();

            $table->timestamps();

            $table->foreign('identification_id')->references('id')->on('identifications');
            $table->foreign('entreprise_id')->references('id')->on('entreprises');
            $table->foreign('reclamation_type')->references('id')->on('reclamations');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plaintes');
    }
}
