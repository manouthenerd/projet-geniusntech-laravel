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
                'description' => "<div>&nbsp;</div><div><strong>Garantissez la puissance, la sécurité et la fiabilité de votre bâtiment grâce à une installation électrique pensée pour durer, réalisée par nos électriciens.<br></strong>&nbsp;</div><div>Notre service d’<strong>électricité</strong> couvre l’<strong>installation électrique</strong> complète, la <strong>mise en conformité</strong> des tableaux, le <strong>câblage</strong> réseau basse et haute tension ainsi que le <strong>dépannage électrique</strong> 24 h/24. Nous commençons par un audit énergétique gratuit pour identifier les points critiques ; ensuite, nous concevons un schéma de distribution optimisé qui réduit les pertes et anticipe vos besoins futurs. Qu’il s’agisse d’une <strong>entreprise</strong> en croissance ou d’une <strong>maison</strong> individuelle, nous utilisons des composants certifiés afin de garantir la <strong>sécurité électrique</strong> et la longévité de votre investissement.</div>",
                'image' => '/images/services/electricity.png',
            ],
            [
                'identifier' => 'video-surveillance',
                'title' => 'Vidéo surveillance',
                'summary' => 'Garder un oeil sur les flux entrants et sortants',
                'description' => "<div><strong>Protégez ce qui compte vraiment grâce à une solution de vidéosurveillance fiable et évolutive, spécialement conçue pour les réalités d’Abidjan.</strong></div><div>Nos systèmes de <strong>vidéosurveillance</strong> combinent des <strong>caméras de surveillance</strong> IP haute définition, un enregistrement sécurisé sur le cloud et la <strong>télésurveillance</strong> 24 h/24. Que vous dirigiez une <strong>entreprise</strong> ou souhaitiez protéger votre <strong>maison</strong>, vous bénéficiez d’alertes instantanées, d’un accès en direct depuis votre smartphone et d’analyses intelligentes qui détectent automatiquement les intrusions. Nos techniciens certifiés réalisent une étude de risques sur site, positionnent chaque caméra pour une couverture à 360 ° et assurent la conformité aux normes de <strong>sécurité</strong> en vigueur <strong>en Côte d’Ivoire</strong>.</div><div>En choisissant notre service de vidéosurveillance <strong>à Abidjan</strong>, vous réduisez les actes de vandalisme, optimisez la <strong>protection</strong> de vos employés et valorisez l’image de votre entreprise. Les particuliers, quant à eux, profitent d’une tranquillité d’esprit totale même en déplacement grâce à la surveillance à distance et aux historiques vidéo horodatés.</div><div><strong>Ne laissez plus place au doute : demandez dès maintenant votre audit gratuit et découvrez comment nos solutions de sécurité peuvent renforcer votre protection dès aujourd’hui !</strong></div>",
                'image' => '/images/services/camera.png',
            ],
            [
                'identifier' => 'securite-electronique',
                'title' => 'Sécurité électronique',
                'summary' => 'Opter pour une sécurité extrême pour vos systèmes',
                'description' => "<div>&nbsp;<strong>Mettez chaque instant sous haute protection grâce à une solution de sécurité électronique complète, taillée pour les réalités d’Abidjan et de toute la Côte d’Ivoire.</strong>&nbsp;<br><br></div><div>Nos systèmes de <strong>sécurité électronique</strong> associent <strong>vidéosurveillance</strong> HD, <strong>caméras de surveillance</strong> intelligentes, <strong>contrôle d’accès</strong> biométrique et <strong>télésurveillance</strong> 24 h/24. Après une analyse de risques détaillée, nous dessinons une architecture sur‑mesure qui couvre vos zones sensibles : parkings, salles serveurs, entrées principales. Les flux vidéo sont chiffrés, stockés dans le cloud ou en local, et accessibles depuis votre smartphone.&nbsp;<br><br></div><div>Pour une <strong>entreprise</strong>, la sécurité électronique renforce la conformité, protège les actifs stratégiques et rassure partenaires comme employés. Pour une <strong>maison</strong>, elle garantit la <strong>protection</strong> de votre foyer, même lors de vos déplacements, grâce aux notifications en temps réel et aux historiques vidéo horodatés. Nos installations évolutives s’adaptent facilement à l’extension de vos locaux ou à l’ajout de nouvelles caméras.&nbsp;<br><br></div><div><strong>Agissez dès maintenant : demandez votre audit gratuit et découvrez comment une sécurité électronique de pointe peut sécuriser vos biens et votre tranquillité d’esprit !</strong>&nbsp;</div>",
                'image' => '/images/services/electronic.jpg',
            ],
            [
                'identifier' => 'telecommunication',
                'title' => 'Télécommunication',
                'summary' => 'La technologie évoluée de communication indispensable aujourd’hui',
                'description' => "<div><strong>Connectez votre avenir grâce à des solutions de télécommunication ultra‑performantes, pensées pour les réalités d’Abidjan et de toute la Côte d’Ivoire.<br></strong><br></div><div>Nos offres de <strong>télécommunication</strong> unifient <strong>fibre optique</strong>, <strong>réseau LAN/Wi‑Fi sécurisé</strong> et <strong>VoIP</strong> afin de garantir un <strong>internet haut débit</strong> stable, une collaboration fluide et une protection maximale de vos données. Après un audit complet de votre infrastructure, nous concevons une architecture sur mesure : câblage structuré, équipements de commutation redondants, routage optimisé vers le <strong>cloud</strong> et segmentation réseau pour isoler les flux sensibles (vidéosurveillance ou systèmes de <strong>sécurité</strong>).<br><br></div><div>Pour une <strong>entreprise</strong>, cela signifie moins de coupures, une productivité accrue et la capacité de déployer des applications gourmandes en temps réel.<br> Pour une <strong>maison</strong>, c’est la promesse d’un streaming 4K sans latence, d’un télétravail serein et d’une connectivité domotique fiable.<br><br></div><div><strong>Passez dès aujourd’hui au très haut débit sécurisé : demandez votre diagnostic gratuit et découvrez comment nous pouvons booster votre connectivité !</strong></div>",
                'image' => '/images/services/com.png',
            ],
            [
                'identifier' => 'intermediation',
                'title' => 'Intermédiation',
                'summary' => 'Nous facilitons la rencontre entre l’offre et la demande',
                'description' => "<div><strong>Transformez chaque opportunité commerciale en succès : notre service d’intermédiation connecte les bons prestataires aux bons clients, rapidement et en toute transparence à Abidjan.<br></strong><br></div><div>Spécialistes de l’<strong>intermédiation professionnelle</strong>, nous assurons la <strong>mise en relation</strong> ciblée entre entreprises, startups et particuliers : recherche de <strong>prestataires de confiance</strong>, négociation des conditions, rédaction de <strong>contrats sécurisés</strong> et suivi du projet jusqu’à sa réalisation. Les prestataires, eux, accèdent à un flux régulier de demandes qualifiées et à une visibilité accrue.<br><br></div><div>Nous analysons chaque besoin, vérifions la solvabilité des parties et orchestrons la <strong>négociation</strong> pour garantir un accord gagnant‑gagnant. Résultat : réduction des risques contractuels, délais raccourcis et satisfaction mesurable des deux côtés. Que vous soyez une <strong>PME</strong> cherchant un fournisseur stratégique ou un particulier en quête d’un artisan fiable, notre intermédiation sécurise votre investissement et maximise votre retour sur valeur.<br><br></div><div><strong>Passez à l’étape suivante : sollicitez dès maintenant un diagnostic gratuit et découvrez comment notre intermédiation peut propulser vos projets vers la réussite !</strong></div>",
                'image' => '/images/services/intermediation.jpg',
            ],
            [
                'identifier' => 'etudes-et-consulting',
                'title' => 'Etudes et consulting',
                'summary' => 'Nous analysons vos besoins de manière professionnelle',
                'description' => "<div><strong>Faites parler les données : avec notre service d’études et consulting, transformez chaque décision en avantage concurrentiel autour de vous.<br></strong><br></div><div>Nos experts mènent des <strong>études de faisabilité</strong> précises, des <strong>audits stratégiques</strong> et des analyses de marché pointues pour guider votre <strong>entreprise</strong> vers des gains mesurables. Nous collectons les indicateurs clés, évaluons les risques et bâtissons un plan d’action sur‑mesure, qu’il s’agisse d’optimiser une chaîne logistique, de déployer une solution de <strong>sécurité</strong> (vidéosurveillance ou contrôle d’accès) ou de préparer un investissement immobilier.</div><div>Pour les dirigeants, c’est l’assurance de décisions éclairées et d’un <strong>ROI</strong> accéléré ; pour les porteurs de projet individuels, une orientation rassurante qui protège votre capital dès le premier franc investi.<br><br></div><div><strong>Ne laissez plus place au hasard : réservez votre session de diagnostic gratuit et donnez à vos ambitions la précision d’un consulting de haut niveau !</strong></div>",
                'image' => '/images/services/etudes-consulting.jpg',
            ],
            [
                'identifier' => 'batiments-et-travaux-publics',
                'title' => 'Bâtiments et travaux publics',
                'summary' => "Nous intervenons sur l'ensemble des services en BTP",
                'description' => "<div><strong>Bâtissez l’avenir en toute confiance : notre expertise en Bâtiments et Travaux Publics (BTP) donne vie à vos projets, des fondations aux finitions.<br></strong><br></div><div>Nous prenons en charge la <strong>construction de bâtiments</strong> résidentiels et industriels, la réalisation d’ouvrages de <strong>travaux publics,</strong>et l’intégration de solutions de <strong>sécurité</strong> comme la <strong>vidéosurveillance</strong>, les <strong>caméras de surveillance</strong> et la <strong>télésurveillance</strong> pour protéger votre chantier puis votre patrimoine. Chaque projet débute par une étude technique détaillée ; nous optimisons le budget, choisissons les matériaux durables et planifions un calendrier réaliste afin de limiter les imprévus.<br><br></div><div>Les <strong>entreprises</strong> bénéficient d’un interlocuteur unique, d’un reporting rigoureux et d’un chantier sécurisé 24 h/24. Les particuliers voient leur <strong>maison</strong> se matérialiser dans les délais, avec une <strong>protection</strong> intégrée contre l’incendie et l’intrusion.<br><br></div><div><strong>Prêt à bâtir sans compromis ? Contactez‑nous dès aujourd’hui pour un devis gratuit et transformez vos plans en réalisations durables !</strong></div>",
                'image' => '/images/services/BTP.jpg',
            ],
            [
                'identifier' => 'elevage',
                'title' => 'Elevage',
                'summary' => 'Mécanisme d’élevage permettant de réduire les coûts',
                'description' => "<div><strong>Investissez dans un élevage moderne, rentable et durable grâce à notre expertise complète au service des éleveurs professionnels et particuliers en Côte d’Ivoire.<br></strong><br></div><div>Notre service d’<strong>élevage</strong> couvre la planification, la mise en place et le suivi de projets d’élevage bovin, avicole, porcin et caprin. De la construction des bâtiments adaptés (avec intégration de systèmes de <strong>vidéosurveillance</strong> pour la <strong>sécurité</strong> des installations) à la sélection génétique des espèces, nous accompagnons chaque client dans la création d’un élevage performant et bien encadré. Nos solutions intègrent aussi la gestion automatisée de l’alimentation, le suivi sanitaire, et la formation aux bonnes pratiques d’élevage.<br><br></div><div>Les <strong>entreprises agroalimentaires</strong> bénéficient d’un élevage optimisé en rendement, traçabilité et conformité réglementaire. Quant aux porteurs de projet ou particuliers, ils sont guidés pas à pas, de l’idée à la production, avec des conseils techniques, des outils de gestion adaptés et des systèmes de <strong>protection</strong> (alarmes, caméras, clôtures intelligentes) pour sécuriser le cheptel<br><br></div><div><strong>Faites de votre élevage un levier de croissance durable : contactez‑nous pour une étude gratuite et donnez vie à votre projet agricole en toute sérénité !</strong></div>",
                'image' => '/images/services/elevage.jpg',
            ],
            [
                'identifier' => 'agriculture',
                'title' => 'Agriculture',
                'summary' => 'Une culture de diverses denrées alimentaires pour nourrir la population',
                'description' => "<div><strong>Récoltez plus que des fruits : avec notre expertise en agriculture, transformez vos terres en véritables sources de valeur durable, partout en Côte d’Ivoire.<br></strong><br></div><div>Notre service <strong>agricole</strong> accompagne les <strong>producteurs</strong>, <strong>coopératives</strong> et <strong>entreprises agroalimentaires</strong> dans la <strong>mise en valeur des exploitations</strong>, l’<strong>optimisation des rendements</strong> et la <strong>sécurisation des récoltes</strong>. De la préparation des sols à la récolte, nous intégrons les meilleures pratiques de <strong>l’agriculture moderne</strong>, avec des solutions intelligentes comme l’irrigation goutte-à-goutte, les engrais bio-adaptés, ou encore des outils de <strong>vidéosurveillance agricole</strong> pour surveiller les champs à distance.<br><br></div><div>Nous proposons également des services de <strong>télésurveillance des entrepôts</strong>, d’installation de <strong>systèmes de sécurité</strong> pour les zones de stockage et de <strong>caméras de surveillance</strong> pour la protection des intrants et matériels agricoles. Chaque projet commence par une <strong>étude agrotechnique</strong>, suivie d’un accompagnement personnalisé incluant la <strong>formation des exploitants</strong>, la gestion des risques climatiques et le suivi des indicateurs de performance.</div><div>Que vous soyez un exploitant individuel ou une entreprise du secteur agricole, vous bénéficiez d’un accompagnement fiable, d’un rendement maîtrisé et d’une protection renforcée de vos investissements.<br><br></div><div><strong>Investissez dans une agriculture résiliente et rentable : contactez‑nous pour un diagnostic gratuit et boostez la performance de votre exploitation !</strong></div>",
                'image' => '/images/services/agriculture.jpg',
            ],
            [
                'identifier' => 'transit-import-export',
                'title' => 'Transit import-export',
                'summary' => "Une équipe opérationnelle pour l'importation et l’exportation",
                'description' => "<div><strong>Fluidifiez vos opérations logistiques à l’international grâce à notre expertise en transit import‑export, pour des marchandises livrées en toute sécurité et dans les délais.<br></strong><br></div><div>Spécialistes du <strong>transit import‑export à Abidjan</strong>, nous assurons la gestion complète de vos flux de marchandises, de la déclaration en douane à la livraison finale. Nos services couvrent le <strong>dédouanement</strong>, l’<strong>emballage sécurisé</strong>, la <strong>logistique portuaire</strong>, l’<strong>entreposage temporaire</strong>, et la <strong>traçabilité</strong> en temps réel. Que vous importiez des équipements technologiques (vidéosurveillance, caméras de surveillance, systèmes de sécurité) ou exportiez des produits agricoles ou industriels, nous vous garantissons un processus rapide, conforme aux réglementations locales et internationales.<br><br></div><div>Pour les <strong>entreprises</strong>, cela se traduit par des coûts maîtrisés, des risques réduits, et une visibilité sur chaque étape du transit. Pour les <strong>particuliers</strong>, nous proposons un accompagnement personnalisé, qu’il s’agisse de déménagements internationaux ou d’achats en ligne à forte valeur ajoutée. Nous travaillons avec un réseau fiable d’agents en Afrique, en Europe et en Asie, pour assurer la <strong>protection</strong> et la livraison efficace de vos biens, où que vous soyez.<br><br></div><div><strong>Simplifiez vos formalités douanières et logistiques dès aujourd’hui : contactez‑nous pour une étude gratuite et sécurisez vos opérations d’import‑export en toute sérénité !</strong></div>",
                'image' => '/images/services/import export.jpg',
            ],
            [
                'identifier' => 'livraison',
                'title' => 'Livraison',
                'summary' => 'Des agents à disposition pour la livraison de vos commandes',
                'description' => "<div><strong>Optimisez vos livraisons avec un service rapide, sécurisé et adapté aux besoins des entreprises et particuliers à Abidjan et en Côte d’Ivoire.<br></strong><br></div><div>Notre service de <strong>livraison</strong> garantit la prise en charge efficace de vos colis, documents et marchandises, avec un suivi en temps réel pour une transparence totale. Que vous soyez une <strong>entreprise</strong> cherchant à expédier des produits à vos clients ou un particulier souhaitant un transport fiable, nous adaptons nos solutions à chaque volume et destination. Notre flotte moderne et nos protocoles stricts assurent la <strong>sécurité</strong> de vos biens, limitant les risques de perte ou de dommage.<br><br></div><div>Grâce à une gestion optimisée et une équipe formée, nous respectons les délais annoncés, offrant ainsi une <strong>protection</strong> maximale de votre image de marque. Nos clients bénéficient d’un service personnalisé, incluant la possibilité de programmer leurs livraisons selon leurs besoins, avec des options de remise en main propre ou dépôt sécurisé. Notre expertise locale nous permet de couvrir l’ensemble d’Abidjan et ses environs, tout en offrant des tarifs compétitifs.<br><br></div><div><strong>Confiez-nous vos livraisons et profitez d’une tranquillité d’esprit totale : contactez-nous dès aujourd’hui pour un devis personnalisé et optimisez votre logistique !</strong></div>",
                'image' => '/images/services/Delivery.jpeg',
            ],

            [
                'identifier' => 'radiocommunication',
                'title' => 'Radiocommunication',
                "summary" => " Nous concevons des solutions radio fiables et adaptées à vos environnements critiques.",
                "description" => "<div style='font-family: Arial, sans-serif; line-height: 1.6; color: #222;'><p><strong>Communiquez sans faille, même dans les environnements les plus exigeants.</strong> Notre expertise en radiocommunication garantit des échanges fluides, fiables et sécurisés pour vos équipes sur le terrain.</p> <br/><p>Nous concevons, installons et maintenons des systèmes de radiocommunication professionnels (analogiques, numériques, relais, interphonie, etc.), adaptés aux chantiers BTP, zones industrielles, sites isolés ou sensibles. Grâce à une <strong>étude de couverture radio sur mesure</strong>, nous assurons une communication optimale, même en l’absence de réseau mobile.</p> <br/><p>Votre projet bénéficie d’un <strong>matériel robuste</strong>, de <strong>fréquences adaptées</strong>, d’une <strong>maintenance réactive</strong> et d’une <strong>surveillance continue</strong>. Qu’il s’agisse de sécuriser un chantier, coordonner des équipes mobiles ou interconnecter plusieurs sites, notre solution est prête à l’emploi, 24 h/24.</p> <br/><p><strong>Prêt à rester connecté partout, en toute sécurité ?</strong><br>Contactez-nous pour une étude gratuite et personnalisée de vos besoins en radiocommunication.</p></div>",
                "image" => "/images/services/radiocommunication.png"
            ]
        ]);
    }
}
