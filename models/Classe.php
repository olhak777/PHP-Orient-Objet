<?php


class Classe
{
    private $nom;
    private $capacite;
    private $professeurP;
    private $eleves;



public function __construct($nom, $capacite, $professeurP) {
    $this->nom = $nom;
    $this->capacite = $capacite;
    $this->professeurP = $professeurP;
    $this->eleves = [];

}
/*-- ---------creation de getters-------*/
public function getNom() {
    return $this->nom;
}
public function getCapacite() {
    return $this->capacite;
}

public function getProfesseurP() {
    return $this->professeurP;
}
public function getEleves() {
    return $this->eleves;
}


    /*-- ---------creation de setters-------*/
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setCapacite($capacite) {
        $this->capacite = $capacite;
    }

    public function setProfesseurP($professeurP) {
        $this->professeurP = $professeurP;
    }
    public function setEleves($eleves) {
        $this->eleves = $eleves;
    }
    public function addEleve(Eleve $eleve) {
        $this->eleves[] = $eleve;
    }

}