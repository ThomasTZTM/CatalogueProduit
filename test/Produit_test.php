<?php

// On require l'autoload

require_once __DIR__ . "/../vendor/autoload.php";

// On met le use de la classe qu'on veut

use \App\Produit;

// On créer un vehicule

$produit1 = new Produit("Chewing-gum", 1.25, 20);
$produit1->afficherInfos();
echo PHP_EOL;
echo $produit1->calculerPrixFinal();