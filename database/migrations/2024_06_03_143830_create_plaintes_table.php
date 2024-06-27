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
            $table->boolean('type'); // Travailleur 1 ou Beneficiaire 0
            // Section 1 Localisation reclamation
            $table->string('localite');
            $table->string('commune');
            $table->unsignedBigInteger('departement_id');
            $table->unsignedBigInteger('region_id');

            // Section 2 Identification du plaignant
            $table->string('prenom');
            $table->string('nom');
            $table->boolean('sexe'); // Masculin 1 ou Feminin 0
            $table->string('fonction');
            $table->string('adresse');
            $table->bigInteger('telephone');

            // Si t'es beneficiaire
            $table->unsignedBigInteger('projet_id')->nullable();
            // Si t'es employé
            $table->boolean('entreprise')->nullable(); // PAPSA 1 OU AUTRE 0
            $table->string('entreprise_name')->nullable();

            // Section 3 Description de la réclamation
            $table->unsignedBigInteger('reclamation_type');
            $table->text('reclamation_description');
            $table->boolean('preuve'); // oui 1 ou Non 0
            $table->string('pj')->nullable();
            $table->date('incident_date');
            $table->text('solutions');

            $table->timestamps();

            $table->foreign('projet_id')->references('id')->on('projets');
            $table->foreign('departement_id')->references('id')->on('departements');
            $table->foreign('region_id')->references('id')->on('regions');
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
