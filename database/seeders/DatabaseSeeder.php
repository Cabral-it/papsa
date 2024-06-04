<?php

namespace Database\Seeders;

use App\Models\Entreprise;
use App\Models\Reclamation;
use App\Models\Identification;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Database\Seeders\Traits\TruncateTable;

/**
 * Class DatabaseSeeder.
 */
class DatabaseSeeder extends Seeder
{
    use TruncateTable;

    /**
     * Seed the application's database.
     */
    public function run()
    {
        Model::unguard();

        $this->truncateMultiple([
            'activity_log',
            'failed_jobs',
        ]);

        $this->call(AuthSeeder::class);
        $this->call(AnnouncementSeeder::class);

        // Seed des identifications type
        Identification::create(['libele' => 'Carte nationale D\'identification']);
        Identification::create(['libele' => 'Passport']);
        Identification::create(['libele' => 'Carte consulaire']);
        Identification::create(['libele' => 'Registre de commerce']);
        Identification::create(['libele' => 'NINEA']);
        Identification::create(['libele' => 'Titre de propriété']);
        Identification::create(['libele' => 'Status de l\'entreprise']);
        Identification::create(['libele' => 'Autre pièce d\'identification']);
        // Seed des entreprises type
        Entreprise::create(['libele' => 'Personne physique']);
        Entreprise::create(['libele' => 'Famille']);
        Entreprise::create(['libele' => 'Entreprise']);
        Entreprise::create(['libele' => 'GIE']);
        Entreprise::create(['libele' => 'Association ou groupement (OCB)']);
        Entreprise::create(['libele' => 'Structure communautaire ou ONG']);
        Entreprise::create(['libele' => 'Service étatique']);
        Entreprise::create(['libele' => 'Autre Catégorie']);
        // Seed des entreprises type
        Reclamation::create(['libele' => 'Opération de sécurisation foncière']);
        Reclamation::create(['libele' => 'Identification ou enregistrement des droits']);
        Reclamation::create(['libele' => 'Travaux de construction du bureau foncier']);
        Reclamation::create(['libele' => 'Personnel projet']);
        Reclamation::create(['libele' => 'Autre réclamation']);


        Model::reguard();
    }
}
