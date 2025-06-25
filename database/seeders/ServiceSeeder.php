<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'identifier' => 'electricite',
                'title' => 'Electricité',
                'summary' => 'De l’installation à la maintenance, nos techniciens sont à votre dispo',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
                'image' => '/images/services/electricity.png',
            ],
            [
                'identifier' => 'video-surveillance',
                'title' => 'Vidéo surveillance',
                'summary' => 'Garder un oeil sur les flux entrants et sortants',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
                'image' => '/images/services/camera.png',
            ],
            [
                'identifier' => 'securite-electronique',
                'title' => 'Sécurité électronique',
                'summary' => 'Opter pour une sécurité extrême pour vos systèmes',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
                'image' => '/images/services/electronic.jpg',
            ],
            [
                'identifier' => 'telecommunication',
                'title' => 'Télécommunication',
                'summary' => 'La technologie évoluée de communication indispensable aujourd’hui',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
                'image' => '/images/services/com.png',
            ],
            [
                'identifier' => 'intermediation',
                'title' => 'Intermédiation',
                'summary' => 'Nous facilitons la rencontre entre l’offre et la demande',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
                'image' => '/images/services/intermediation.jpg',
            ],
            [
                'identifier' => 'etudes-et-consulting',
                'title' => 'Etudes et consulting',
                'summary' => 'Nous analysons vos besoins de manière professionnelle',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
                'image' => '/images/services/etudes-consulting.jpg',
            ],
            [
                'identifier' => 'batiments-et-travaux-publics',
                'title' => 'Bâtiments et travaux publics',
                'summary' => "Nous intervenons sur l'ensemble des services en BTP",
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
                'image' => '/images/services/BTP.jpg',
            ],
            [
                'identifier' => 'elevage',
                'title' => 'Elevage',
                'summary' => 'Mécanisme d’élevage permettant de réduire les coûts',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
                'image' => '/images/services/elevage.jpg',
            ],
            [
                'identifier' => 'agriculture',
                'title' => 'Agriculture',
                'summary' => 'Une culture de diverses denrées alimentaires pour nourrir la population',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
                'image' => '/images/services/agriculture.jpg',
            ],
            [
                'identifier' => 'transit-import-export',
                'title' => 'Transit import-export',
                'summary' => "Une équipe opérationnelle pour l'importation et l’exportation",
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
                'image' => '/images/services/import export.jpg',
            ],
            [
                'identifier' => 'livraison',
                'title' => 'Livraison',
                'summary' => 'Des agents à disposition pour la livraison de vos commandes',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit...',
                'image' => '/images/services/Delivery.jpeg',
            ],
        ]);
    }
}
