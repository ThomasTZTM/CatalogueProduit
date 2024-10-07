<?php

// On require l'autoload

require_once __DIR__ . "/../vendor/autoload.php";

// On met le use de la classe qu'on veut

use \App\Catalogue;
use \App\ProduitAlimentaire;
use \App\ProduitElectronique;

// On créer les objets

$aliment1 = new ProduitAlimentaire("El Morjdène", 1.50, 1, new DateTime("2024-10-10"));
$elec1 = new ProduitElectronique("IPHONE 15", 1195, 1, 12);

$panier = new Catalogue([]);
$panier->ajouterProduit($aliment1);
$panier->ajouterProduit($elec1);

$panier->afficherProduits();
$panier->calculerTotalPrix();