<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Batteur sur socle Custom de KitchenAid',
                'description' => "Préparez tout ce que vous voulez, comme de la pâte à gâteau et de la purée de pommes de terre avec le batteur sur socle à tête inclinable Custom de KitchenAid. Doté de 10 vitesses et d'un grand bol de 4,5 pte en acier inoxydable, ce batteur sur socle vous permet de préparer de la pâte pour 6 douzaines de biscuits d'un seul coup. Mouvement de malaxage planétaire tournant vers 67 différents points de contact pour des mélanges rapides et uniformes.",
                'image1'=>'https://multimedia.bbycastatic.ca/multimedia/products/1500x1500/103/10394/10394857_1.jpg',
                'image2'=>'https://multimedia.bbycastatic.ca/multimedia/products/300x300/103/10394/10394857.jpg',
                'image3'=>'https://multimedia.bbycastatic.ca/multimedia/products/1500x1500/103/10394/10394857_2.jpg',
                'image4'=>'https://th.bing.com/th/id/R.dd5bdb31156810b345fa921ddb8b00ae?rik=hGp7Yxat4AX0yg&riu=http%3a%2f%2fmedia.madeindesign.com%2fnuxeo%2fdivers%2fc%2f0%2fc0fc0ab2-079b-4b37-b88c-d8392ff749aa.jpg&ehk=llnqbVjshjZkMWNee%2btc2aZFDuLCMQg6hanraXchmXs%3d&risl=&pid=ImgRaw&r=0',
                'quantity'=>18,
                'price' => 339,
                'category_id' => 1
            ],
            [
                'name' => 'SEB CLIPSOMINUT EASY COCOTTE-MINUTE 9L FRENCH COCOTTE INDUCTION P4624923 + LIVRE DE 100 RECETTES',
                'description' => "La cocotte minute ClipsoMinut EASY en acier inoxydable associe des résultats sains et délicieux à des performances express pour faciliter la cuisson au quotidien.
                De plus, sa généreuse capacité de 9 litres, est idéale pour cuisiner en grande quantité !",
                'image1'=>'https://image.darty.com/encastrable/casserolerie/cocotte_faitout_marmite/seb_p4624923_s2205057085648A_175859802.jpg',
                'image2'=>'https://image.darty.com/encastrable/casserolerie/cocotte_faitout_marmite/seb_p4624923_s2205057085648E_175844222.jpg',
                'image3'=>'https://image.darty.com/encastrable/casserolerie/cocotte_faitout_marmite/seb_p4624923_s2205057085648F_175840137.jpg',
                'image4'=>'https://image.darty.com/encastrable/casserolerie/cocotte_faitout_marmite/seb_p4624923_s2205057085648C_175852028.jpg',
                'quantity'=>6,
                'price' => 299,
                'category_id' => 2
            ],
            [
                'name' => 'Grille-pain The Bit More de Breville',
                'description' => 'Ce grille-pain à quatre fentes de Breville présente un boîtier en acier inoxydable et des fentes assez larges pour les tranches épaisses et les bagels. Il est doté des fonctions bagel, réchauffage, congélation et annulation, ainsi que de la touche Lift and Look pour vérifier le degré de grillage sans annuler le cycle.',
                'image1'=>'https://multimedia.bbycastatic.ca/multimedia/products/500x500/102/10248/10248657.jpg',
                'image2'=>'https://multimedia.bbycastatic.ca/multimedia/products/500x500/102/10248/10248657_1.jpg',
                'image3'=>'https://multimedia.bbycastatic.ca/multimedia/products/500x500/102/10248/10248657_2.jpg',
                'image4'=>'https://multimedia.bbycastatic.ca/multimedia/products/500x500/102/10248/10248657_3.jpg',
                'quantity'=>8,
                'price' =>124,
                'category_id' => 1
            ],
            
            [
                'name' => 'KESSMANN MICHELINO barbecue grill en acier inoxydable chariot avec grill',
                'description' => "Fait d'acier inoxydable, imperméable à l'eau, résistant aux intempéries et pas facile à déformer, léger et de haute qualité.Barbecue au charbon mobile sur deux roues résistantes aux intempéries.La grille de gril réglable en hauteur 53x33cm offre beaucoup despace pour de délicieuses spécialités de barbecue",
                'image1'=>'https://a.allegroimg.com/original/0c4875/f6ab30714436bf502e921f3bfabb',
                'image2'=>'https://a.allegroimg.com/s1024/0c2e9a/d28ea9fb470e820d30bf9df74b2a',
                'image3'=>'https://a.allegroimg.com/s1024/0c73e0/226c83fe4081be4f29198ba2c8ed',
                'image4'=>'https://a.allegroimg.com/s1024/0ce7b5/880bafd24a01b53db2461c679a92',
                'quantity'=>7,
                'price' => 296,
                'category_id' => 4
            ],
            [
                'name' => 'Machine à expresso Oracle Touch avec moussoir à lait et café de Breville ',
                'description' => "Savourez un café digne d'un barista sur simple pression d'un bouton avec la machine Oracle Touch de Breville. La préparation d'un café haut de gamme constitue une science : l'eau doit être à une température précise et à une pression précise au moment précis. Heureusement, Oracle Touche vous simplifie la tâche! Cette machine à espresso qui moud les grains et donne texture au lait fera le bonheur des amateurs de café au palais le plus fin.",
                'image1'=>'https://multimedia.bbycastatic.ca/multimedia/products/500x500/114/11425/11425965.jpg',
                'image2'=>'https://multimedia.bbycastatic.ca/multimedia/products/500x500/114/11425/11425965_1.jpg',
                'image3'=>'https://multimedia.bbycastatic.ca/multimedia/products/1500x1500/114/11425/11425965_3.jpg',
                'image4'=>'https://multimedia.bbycastatic.ca/multimedia/products/1500x1500/114/11425/11425965_4.jpg',
                'quantity'=>6,
                'price' => 299,
                'category_id' => 1
            ],
            [
                'name' => 'TEFAL TEFAL AIR COCOTTE GRISE 24 CM, 4,7 L, FONTE DALUMINIUM LEGERE E26',
                'description' => "Le style d'une authentique cocotte, modernisé pour s'adapter à votre vie ! Avec sa conception légère, le faitout  Tefal Air est l'équilibre parfait entre praticité et polyvalence, combinant les méthodes de cuisson traditionnelles  avec le confort moderne pour des résultats délicieux jour après jour sur une large gamme de recettes fraîches et  modernes. Laissez régner la légèreté !",
                'image1'=>'https://image.darty.com/encastrable/casserolerie/cocotte_faitout_marmite/tefal_cocotte_air_24_s2211027307276A_155707668.jpg',
                'image2'=>'https://image.darty.com/encastrable/casserolerie/cocotte_faitout_marmite/tefal_cocotte_air_24_s2211027307276C_155706129.jpg',
                'image3'=>'https://image.darty.com/encastrable/casserolerie/cocotte_faitout_marmite/tefal_cocotte_air_24_s2211027307276E_155704612.jpg',
                'image4'=>'https://image.darty.com/encastrable/casserolerie/cocotte_faitout_marmite/tefal_cocotte_air_24_s2211027307276G_155702898.jpg',
                'quantity'=>14,
                'price' => 195,
                'category_id' => 2
            ],
            [
                'name' => 'Étagère de Placard sous Évier à 2 Couches Coulissant, Rack Cuisine Organisateur pour Cuisine Salle de Bain Chambre Salon Noir',
                'description' => "Étagère de Placard sous Évier à 2 Couches Coulissant, Rack Cuisine Organisateur pour Cuisine Salle de Bain Chambre Salon Noir",
                'image1'=>'https://www.cdiscount.com/pdt2/2/8/2/1/1200x1200/acm0786135831282/rw/etagere-de-placard-sous-evier-a-2-couches-coulissa.jpg',
                'image2'=>'https://www.cdiscount.com/pdt2/2/8/2/2/1200x1200/acm0786135831282/rw/etagere-de-placard-sous-evier-a-2-couches-coulissa.jpg',
                'image3'=>'https://www.cdiscount.com/pdt2/2/8/2/3/1200x1200/acm0786135831282/rw/etagere-de-placard-sous-evier-a-2-couches-coulissa.jpg',
                'image4'=>'https://www.cdiscount.com/pdt2/2/8/2/4/1200x1200/acm0786135831282/rw/etagere-de-placard-sous-evier-a-2-couches-coulissa.jpg',
                'quantity'=>7,
                'price' => 206,
                'category_id' => 3
            ],
            [
                'name' => 'LAGOSTINA TRADIZIONE COCOTTE FONTE INDUCTION 26 CM + COUVERCLE ',
                'description' => "La cocotte Tradizione de Lagostina 26 cm, fabriquée en fonte de première qualité, associe le meilleur de la cuisine et des matériaux traditionnels avec un design italien moderne.",
                'image1'=>'https://image.darty.com/encastrable/casserolerie/cocotte_faitout_marmite/lagostina_cocotte_26cm_s2303077132557A_113551485.jpg',
                'image2'=>'https://image.darty.com/encastrable/casserolerie/cocotte_faitout_marmite/lagostina_cocotte_26cm_s2303077132557B_113546686.jpg',
                'image3'=>'https://image.darty.com/encastrable/casserolerie/cocotte_faitout_marmite/lagostina_cocotte_26cm_s2303077132557D_113537096.jpg',
                'image4'=>'https://image.darty.com/encastrable/casserolerie/cocotte_faitout_marmite/lagostina_cocotte_26cm_s2303077132557G_113523271.jpg',
                'quantity'=>10,
                'price' => 198,
                'category_id' => 2
            ],
            
            [
                'name' => 'SEB 12 POTS MULTI DELICES EXPRESS & VEGETAL ',
                'description' => "",
                'image1'=>'https://image.darty.com/petit_electromenager/fait_maison/yaourtiere/seb_yg6613_s2303207522819A_123523793.jpg',
                'image2'=>'https://image.darty.com/petit_electromenager/fait_maison/yaourtiere/seb_yg6613_s2303207522819E_123513829.jpg',
                'image3'=>'https://image.darty.com/petit_electromenager/fait_maison/yaourtiere/seb_yg6613_s2303207522819G_123509067.jpg',
                'image4'=>'https://image.darty.com/petit_electromenager/fait_maison/yaourtiere/seb_yg6613_s2303207522819H_123506824.jpg',
                'quantity'=>4,
                'price' => 156,
                'category_id' => 3
            ],
            [
                'name' => 'Tapis de gril epimo_pl 40 x 33 cm 5 pcs.',
                'description' => "PRODUIT✅CERTIFIÉ DURABLE, MATÉRIAU RÉSISTANT À LA CHALEUR RÉUTILISABLE IDÉAL POUR BARBECUE",
                'image1'=>'https://www.cdiscount.com/pdt2/9/9/5/1/1200x1200/auc2008989825995/rw/barbecue-charbon-portable-pliable-barbecue-grill-a.jpg',
                'image2'=>'https://www.cdiscount.com/pdt2/9/9/5/2/1200x1200/auc2008989825995/rw/barbecue-charbon-portable-pliable-barbecue-grill-a.jpg',
                'image3'=>'https://www.cdiscount.com/pdt2/9/9/5/3/1200x1200/auc2008989825995/rw/barbecue-charbon-portable-pliable-barbecue-grill-a.jpg',
                'image4'=>'https://www.cdiscount.com/pdt2/9/9/5/4/1200x1200/auc2008989825995/rw/barbecue-charbon-portable-pliable-barbecue-grill-a.jpg',
                'quantity'=>7,
                'price' => 396,
                'category_id' => 4
            ],
            [
                'name' => 'Porte-Epices 12 Pots à Epices Support Rotatif Inox, Présentoir à Epices de 12 Pots 3 Couches Pratique pour Rangement Stockge Cherche',
                'description' => "Porte-Epices 12 Pots à Epices Support Rotatif Inox, Présentoir à Epices de 12 Pots 3 Couches Pratique pour Rangement Stockge Cherche",
                'image1'=>'https://www.cdiscount.com/pdt2/4/2/3/1/1200x1200/auc0781159336423/rw/porte-epices-12-pots-a-epices-avec-support-rotatif.jpg',
                'image2'=>'https://www.cdiscount.com/pdt2/4/2/3/2/1200x1200/auc0781159336423/rw/porte-epices-12-pots-a-epices-avec-support-rotatif.jpg',
                'image3'=>'https://www.cdiscount.com/pdt2/4/2/3/3/1200x1200/auc0781159336423/rw/porte-epices-12-pots-a-epices-avec-support-rotatif.jpg',
                'image4'=>'https://www.cdiscount.com/pdt2/4/2/3/4/1200x1200/auc0781159336423/rw/porte-epices-12-pots-a-epices-avec-support-rotatif.jpg',
                'quantity'=>9,
                'price' => 256,
                'category_id' => 3
            ],
            [
                'name' => 'Boîte Bonbonglas 2 l',
                'description' => "Cette bonbonnière ou bonbonnière a un couvercle en acier inoxydable et est spécialement conçue pour conserver les bonbons. Le pot à bonbons a deux bases, une régulière et une qui s'incline pour faciliter la manipulation. Décoration non incluse Cette bonbonnière a un volume de 2 litres et une taille d'environ 17 cm x 12,5 cm.",
                'image1'=>'https://src.discounto.de/pics/Angebote/2018-07/2602868/3982514_Bonbonglas-2-l_xxl.jpg',
                'image2'=>'https://src.discounto.de/pics/Angebote/2018-07/2602868/3982515_Bonbonglas-2-l_xxl.jpg',
                'image3'=>'https://src.discounto.de/pics/Angebote/2018-07/2602868/3982516_Bonbonglas-2-l_xxl.jpg',
                'image4'=>'https://src.discounto.de/pics/Angebote/2018-07/2602868/3982517_Bonbonglas-2-l_xxl.jpg',
                'quantity'=>7,
                'price' => 96,
                'category_id' => 3
            ],
            [
                'name' => 'LAGOSTINA DEDICA EASY UP INDUCTION 7L ',
                'description' => "L'autocuiseur Premium Lagostina  Dedica Lagoeasy'up® est la combinaison ultime de l'élégance italienne et d'une performance sans compromis, avec une base extra épaisse de qualité supérieure et la technologie brevetée  Lagoeasy'up® pour une ouverture et une fermeture faciles !",
                'image1'=>'https://image.darty.com/accessoires/casserolerie_pour_cuisson_induction/cocotte_minute/lagostina_easy_up_7l_dedica_s2303077134207A_121940719.jpg',
                'image2'=>'https://image.darty.com/accessoires/casserolerie_pour_cuisson_induction/cocotte_minute/lagostina_easy_up_7l_dedica_s2303077134207B_121938617.jpg',
                'image3'=>'https://image.darty.com/accessoires/casserolerie_pour_cuisson_induction/cocotte_minute/lagostina_easy_up_7l_dedica_s2303077134207D_122031358.jpg',
                'image4'=>'https://image.darty.com/accessoires/casserolerie_pour_cuisson_induction/cocotte_minute/lagostina_easy_up_7l_dedica_s2303077134207E_122029412.jpg',
                'quantity'=>7,
                'price' => 296,
                'category_id' => 2
            ],
            [
                'name' => 'Joseph Joseph Food Preparation Set, 8 pièces',
                'description' => "Cette Joseph Joseph Food Preparation Set, 8 pièces est spécialement conçue pour conserver les bonbons. Le pot à bonbons a deux bases, une régulière et une qui s'incline pour faciliter la manipulation. Décoration non incluse Cette bonbonnière",
                'image1'=>'https://src.discounto.de/pics/Angebote/2022/10/16/961977b2b3844336d6d9baddf4aafddd/Joseph-Joseph-Speisenzubereitungsset-8-teilig_xxl.jpg',
                'image2'=>'https://src.discounto.de/pics/Angebote/2022/10/16/d02bdb366ff5e87f0320fd43b93a9a27/Joseph-Joseph-Speisenzubereitungsset-8-teilig_xxl.jpg',
                'image3'=>'https://src.discounto.de/pics/Angebote/2022/10/16/d8ff9d998d1237cc4798b98b53eb3f1d/Joseph-Joseph-Speisenzubereitungsset-8-teilig_xxl.jpg',
                'image4'=>'https://src.discounto.de/pics/Angebote/2022/10/16/05968718127f96ce94434fbe1a292c3e/Joseph-Joseph-Speisenzubereitungsset-8-teilig_xxl.jpg',
                'quantity'=>14,
                'price' => 291,
                'category_id' => 3
            ],
             
            [
                'name' => 'Barbecue à charbon WEBER Compact Kettle 57 cm - Noir',
                'description' => "Barbecue à charbon Compact - Ø 57 cm - Cuve et couvercle en acier émaillé - Poignées en nylon renforcées à la fibre de verre - Clapets d'aération en aluminium - Grille de cuisson en acier chromé - Grille foyère en acier - Coupelle Cendrier en aluminium - Roues en plastique thermodurci - Bol doseur de briquettes",
                'image1'=>'https://www.cdiscount.com/pdt2/3/3/5/2/1200x1200/web0077924002335/rw/barbecue-a-charbon-weber-compact-kettle-57-cm-n.jpg',
                'image2'=>'https://www.cdiscount.com/pdt2/3/3/5/1/1200x1200/web0077924002335/rw/barbecue-a-charbon-weber-compact-kettle-57-cm-n.jpg',
                'image3'=>'https://www.cdiscount.com/pdt2/3/3/5/3/1200x1200/web0077924002335/rw/barbecue-a-charbon-weber-compact-kettle-57-cm-n.jpg',
                'image4'=>'https://www.mylek.co.uk/images/main/60/240860.jpg',
                'quantity'=>9,
                'price' => 1240,
                'category_id' => 4
            ],
            [
                'name' => 'Ecuissede  Grille-pain à 2 tranches',
                'description' => 'Grille-pain à 2 tranches DT620, fentes extra larges, acier inoxydable rétro avec levier à soulèvement élevé, fonction bagel et muffin, plateau à miettes amovible, 7 réglages d’ombrage',
                'image1'=>'https://multimedia.bbycastatic.ca/multimedia/products/500x500/166/16655/16655745.jpeg',
                'image2'=>'https://multimedia.bbycastatic.ca/multimedia/products/500x500/166/16655/16655745_1.jpeg',
                'image3'=>'https://multimedia.bbycastatic.ca/multimedia/products/500x500/166/16655/16655745_5.jpeg',
                'image4'=>'https://multimedia.bbycastatic.ca/multimedia/products/500x500/166/16655/16655745_3.jpeg',
                'quantity'=>13,
                'price' => 89.99,
                'category_id' => 1
            ],
            [
                'name' => 'Barbecue à gaz - GRILL GARDEN - Noir et gris - 4 bruleurs avec couvercle',
                'description' => "Barbecue à gaz 4 bruleurs avec capot de protection - Surface de cuisson L76 x l41 cm - 2/3 grill et 1/3 plancha - Allumage piezo intégré - 2 tablettes latérales - 1 jupe - 1 tablette basse - 2 roues",
                'image1'=>'https://www.cdiscount.com/pdt2/t/c/d/1/1200x1200/au017tcd/rw/barbecue-a-gaz-grill-garden-noir-et-gris-4-b.jpg',
                'image2'=>'https://www.cdiscount.com/pdt2/t/c/d/3/1200x1200/au017tcd/rw/barbecue-a-gaz-grill-garden-noir-et-gris-4-b.jpg',
                'image3'=>'https://www.cdiscount.com/pdt2/t/c/d/4/1200x1200/au017tcd/rw/barbecue-a-gaz-grill-garden-noir-et-gris-4-b.jpg',
                'image4'=>'https://www.cdiscount.com/pdt2/t/c/d/6/1200x1200/au017tcd/rw/barbecue-a-gaz-grill-garden-noir-et-gris-4-b.jpg',
                'quantity'=>7,
                'price' => 1960,
                'category_id' => 4
            ] 
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::table('products')->truncate();
    }
};
