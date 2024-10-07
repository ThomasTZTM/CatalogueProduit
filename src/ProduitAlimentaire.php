<?php

namespace App;

class ProduitAlimentaire extends Produit
{
    protected \DateTime $datePeremption;

    public function __construct(string $nom, float $prixInitial, int $quantite, \DateTime $datePeremption){
        parent::__construct($nom, $prixInitial, $quantite);
        $this->datePeremption = $datePeremption;
    }

    public function getDatePeremption(): \DateTime
    {
        return $this->datePeremption;
    }

    public function setDatePeremption(\DateTime $datePeremption): void
    {
        $this->datePeremption = $datePeremption;
    }





    public function afficherinfos(): void{
        $datePeremption = $this->datePeremption->format('d/m/Y');
        echo "\nPRODUIT ALIMENTAIRE\n -Libellé : $this->nom \n -Prix : $this->prixInitial € \n -Quantitée : $this->quantite \n -DLC : $datePeremption \n";
    }

    public function calculerPrixFinal(): float{
        $mtn = new \DateTime('now');
        if (($this->datePeremption->diff($mtn->modify('-7 days'))->format('%a'))<7){
            return $this->prixInitial * 0.70;
        }
        return $this->prixInitial;
    }

}

