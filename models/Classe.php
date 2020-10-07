<?php


class Classe
{
    private $nom;
    private $capacite;
    private $professeurP;



public function __construct($nom, $capacite, $professeurP) {
    $this->nom = $nom;
    $this->capacite = $capacite;
    $this->professeurP = $professeurP;

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

    /*-- ---------creation de setters-------*/
    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function setCapacite($capacite) {
        $this->capacite = $capacite;
    }

    public function setrofesseurP($professeurP) {
        $this->professeurP = $professeurP;
    }
}