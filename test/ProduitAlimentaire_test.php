<?php

// On require l'autoload

require_once __DIR__ . "/../vendor/autoload.php";

// On met le use de la classe qu'on veut

use \App\Produit;

// On créer un vehicule
$date = new \DateTime("2024-10-10");

$produitalimentaire1 = new \App\ProduitAlimentaire("Chewing-gum", 1.25, 20,$date);
$produitalimentaire1->afficherInfos();
echo PHP_EOL;
echo "Le prix final du produit est : ".$produitalimentaire1->calculerPrixFinal()."€";