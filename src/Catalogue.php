<?php
namespace App;
class Catalogue
{
    protected array $produits;

    public function __construct(array $produits){
        $this->produits = $produits;
    }

    public function getProduits(): array
    {
        return $this->produits;
    }

    public function setProduits(array $produits): void
    {
        $this->produits = $produits;
    }

    public function ajouterProduit(Produit $produit) : void
    {
        $this->produits[] = $produit;
    }

    public function afficherProduits(): void
    {
        foreach($this->produits as $produit){
            echo $produit->afficherInfos()."\n";
        }
    }

    public function calculerTotalPrix(): void
    {
        $prix_total = 0;
        foreach($this->produits as $produit){
            $prix_total = $prix_total + $produit->calculerPrixFinal();
        }
        echo "\nVoir panier chiffre à $prix_total €\n\n";
    }



}