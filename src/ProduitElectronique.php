<?php

namespace App;

class ProduitElectronique extends Produit
{
    protected int $garantie;

    public function __construct(string $nom, float $prixInitial, int $quantite, int $garantie){
        parent::__construct($nom, $prixInitial, $quantite);
        $this->garantie = $garantie;
    }

    public function getGarantie(): int
    {
        return $this->garantie;
    }

    public function setGarantie(int $garantie): void
    {
        $this->garantie = $garantie;
    }


    public function afficherinfos(): void{
        echo "PRODUIT ELECTRONIQUE \n -Libellé : $this->nom \n -Prix : $this->prixInitial €\n -Quantitée : $this->quantite \n -Garantie : $this->garantie mois.";
    }

    public function calculerPrixFinal(): float{
        if ($this->garantie > 24){
            return $this->prixInitial * 0.80;
        }
        return $this->prixInitial;
    }

}

