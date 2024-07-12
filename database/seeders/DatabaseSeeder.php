<?php

namespace Database\Seeders;

use App\Models\Projet;
use App\Models\Region;
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

        // Seed des regions et departements
        $region = Region::create(['libele' => 'Dakar']);
        $region->departements()->create(['libele' => 'Dakar']);
        $region->departements()->create(['libele' => 'Guédiawaye']);
        $region->departements()->create(['libele' => 'Pikine']);
        $region->departements()->create(['libele' => 'Rufisque']);
        $region = Region::create(['libele' =>'Diourbel']);
        $region->departements()->create(['libele' => 'Bambey']);
        $region->departements()->create(['libele' => 'Diourbel']);
        $region->departements()->create(['libele' => 'Mbacké']);
        $region = Region::create(['libele' => 'Fatick']);
        $region->departements()->create(['libele' => 'Fatick']);
        $region->departements()->create(['libele' => 'Foundiougne']);
        $region->departements()->create(['libele' => 'Gossas']);
        $region = Region::create(['libele' => 'Kaffrine']);
        $region->departements()->create(['libele' => 'Birkilane']);
        $region->departements()->create(['libele' => 'Kaffrine']);
        $region->departements()->create(['libele' => 'Malem-Hodar']);
        $region->departements()->create(['libele' => 'Koungheul']);
        $region = Region::create(['libele' => 'Kaolack']);
        $region->departements()->create(['libele' => 'Kaolack']);
        $region->departements()->create(['libele' => 'Guinguinéo']);
        $region->departements()->create(['libele' => 'Nioro du Rip']);
        $region = Region::create(['libele' => 'Kédougou']);
        $region->departements()->create(['libele' => 'Kédougou']);
        $region->departements()->create(['libele' => 'Salemata']);
        $region->departements()->create(['libele' => 'Saraya']);
        $region = Region::create(['libele' => 'Kolda']);
        $region->departements()->create(['libele' => 'Kolda']);
        $region->departements()->create(['libele' => 'Vélingara']);
        $region->departements()->create(['libele' => 'Médina Yoro Foulah']);
        $region = Region::create(['libele' => 'Louga']);
        $region->departements()->create(['libele' => 'Kébémer']);
        $region->departements()->create(['libele' => 'Linguère']);
        $region->departements()->create(['libele' => 'Louga']);
        $region = Region::create(['libele' => 'Matam']);
        $region->departements()->create(['libele' => 'Kanel']);
        $region->departements()->create(['libele' => 'Matam']);
        $region->departements()->create(['libele' => 'Ranérou']);
        $region = Region::create(['libele' => 'Saint-Louis']);
        $region->departements()->create(['libele' => 'Dagana']);
        $region->departements()->create(['libele' => 'Podor']);
        $region->departements()->create(['libele' => 'Saint-Louis']);
        $region = Region::create(['libele' => 'Sédhiou']);
        $region->departements()->create(['libele' => 'Bounkiling']);
        $region->departements()->create(['libele' => 'Goudomp']);
        $region->departements()->create(['libele' => 'Sédhiou']);
        $region = Region::create(['libele' => 'Tambacounda']);
        $region->departements()->create(['libele' => 'Bakel']);
        $region->departements()->create(['libele' => 'Koumpentoum']);
        $region->departements()->create(['libele' => 'Tambacounda']);
        $region->departements()->create(['libele' => 'Goudiry']);
        $region = Region::create(['libele' => 'Thiès']);
        $region->departements()->create(['libele' => 'Mbour']);
        $region->departements()->create(['libele' => 'Thiès']);
        $region->departements()->create(['libele' => 'Tivaouane']);
        $region = Region::create(['libele' => 'Ziguinchor']);
        $region->departements()->create(['libele' => 'Bignogna']);
        $region->departements()->create(['libele' => 'Oussouye']);
        $region->departements()->create(['libele' => 'Ziguinchor']);
        // Seed des projet
        Projet::create(['libele' => 'Projet Yook-Kom Kom']);
        Projet::create(['libele' => 'Projet de résilience Agricole (PRA)']);
        Projet::create(['libele' => 'Projet de réponse à l\'insécurité alimentaire']);
        Projet::create(['libele' => 'Inondation']);
        Projet::create(['libele' => 'Incendie']);

        // Seed des types de reclamations
        Reclamation::create(['type' => true, 'libele' => 'Demande d\'informations']);
        Reclamation::create(['type' => true, 'libele' => 'Défaut de paiement ou retard de salaire']);
        Reclamation::create(['type' => true, 'libele' => 'Litige ou différend entre collègue']);
        Reclamation::create(['type' => true, 'libele' => 'Litige ou différend avec supérieur hoérarchique']);
        Reclamation::create(['type' => true, 'libele' => 'Condition de travail inadéquate(horaire, congé, licenciement, travail forcé)']);
        Reclamation::create(['type' => true, 'libele' => 'Défaut de prise en charge sanitaire']);
        Reclamation::create(['type' => true, 'libele' => 'Accident de travail']);
        Reclamation::create(['type' => true, 'libele' => 'Dénonciation (abus de pouvoir ou d\'autorité, fraude ou malversation, violence basée sur le genre']);
        Reclamation::create(['type' => true, 'libele' => 'Défaut de prise en charge sanitaire']);
        Reclamation::create(['type' => true, 'libele' => 'Autre']);

        Reclamation::create(['type' => false, 'libele' => 'Demande d\'informations']);
        Reclamation::create(['type' => false, 'libele' => 'Erreurs matérielle']);
        Reclamation::create(['type' => false, 'libele' => 'Erreurs d\'inclusion']);
        Reclamation::create(['type' => false, 'libele' => 'Erreurs d\'exclusion']);
        Reclamation::create(['type' => false, 'libele' => 'Défaut de paiement']);
        Reclamation::create(['type' => false, 'libele' => 'Dénonciation (abus de pouvoir ou d\'autorité, fraude ou malversation, violence basée sur le genre']);

        Model::reguard();
    }
}
