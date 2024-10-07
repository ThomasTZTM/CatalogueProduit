<?php

// On require l'autoload

require_once __DIR__ . "/../vendor/autoload.php";

// On met le use de la classe qu'on veut

use \App\Produit;

// On créer un vehicule

$produitelec1 = new \App\ProduitElectronique("Chewing-gum", 1.25, 20, 5);
$produitelec1->afficherInfos();
echo PHP_EOL;
echo "Le prix final du produit est : ".$produitelec1->calculerPrixFinal()."€";