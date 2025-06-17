<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;

class ServicesList extends Component
{
    public $services = [];

    public function render()
    {
        return view('livewire.services-list')->with(['services' => $this->services]);
    }

    public function href($string)
    {
        return "/services/" . Str::lower(Str::slug($string));
    }

    public function mount()
    {
        $this->services = [
            [
                'id' => 1,
                'title' => 'Electricité',
                'description' => 'De l’installation à la maintenance, nos techniciens sont à votre disposition.',
                'src' => '/images/electricity.png'
            ],
            [
                'id' => 2,
                'title' => 'Vidéo surveillance',
                'description' => 'Garder un oeil sur les flux entrants et sortants de vos activités avec des
                    outils et technologies de pointe.',
                'src' => '/images/camera.png'
            ],
            [
                'id' => 3,
                'title' => 'Sécurité électronique',
                'description' => 'Opter pour une sécurité extrême pour vos systèmes électroniques pour la protections de vos biens.',
                'src' => '/images/electronic.jpg'
            ],
            [
                'id' => 4,
                'title' => 'Télécommunication',
                'description' => 'La technologie évoluée de communication indispensable à notre ère.',
                'src' => '/images/com.png'
            ],
            [
                'id' => 5,
                'title' => 'Intermédiation',
                'description' => 'Nous facilitons la rencontre entre l’offre et la demande avec des
                                stratégies éfficaces.',
                'src' => '/images/intermediation.jpg'
            ],
            [
                'id' => 6,
                'title' => 'Etudes et consulting',
                'description' => 'Nous analysons vos besoins de manière professionnelle afin de vous fournir des solutions
                                adaptées.',
                'src' => '/images/etudes-consulting.jpg'
            ],
            [
                'id' => 7,
                'title' => 'Bâtiments et travaux publics',
                'description' => "Nous intervénons sur l'ensemble des services et travaux avec une équipe
                                spécialisée et très professionnelle.",
                'src' => '/images/BTP.jpg'
            ],
            [
                'id' => 8,
                'title' => 'Elevage',
                'description' => "Mécanisme d'élévage permettant de réduire le
                                pourcentage de pertes de vos animaux pour une meilleure productivité.",
                'src' => '/images/elevage.jpg'
            ],
            [
                'id' => 9,
                'title' => 'Agriculture',
                'description' => "Une culture de diverses denrées alimentaires permetant
                                de nourrir et de répondre aux besoins des civils.",
                'src' => '/images/agriculture.jpg'
            ],
            [
                'id' => 10,
                'title' => 'Transit import-export',
                'description' => "Une équipe opérationnelle pour l'importation et l'exportation de vos
                                colis avec fiabilité et sécurité depuis n'importe où.",
                'src' => '/images/import export.jpg'
            ],
            [
                'id' => 11,
                'title' => 'Livraison',
                'description' => "Des agents à disposition pour la livraison de vos colis
                                de façon express 24/24.",
                'src' => '/images/Delivery.jpeg'
            ],
        ];
    }
}
