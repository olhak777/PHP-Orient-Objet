<?php


class Eleve
{
    private $prenom;
    private $nom;
    private $age;
    private $sexe;


    public function __construct($prenom, $nom, $age, $sexe) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;

    }
    /*-- ---------creation de getters-------*/
    public function getPrenom() {
        return $this->prenom;
    }
    public function getNom() {
        return $this->nom;
    }
    public function getAge() {
        return $this->age;
    }

    public function getSexe() {
        return $this->sexe;
    }

    /*-- ---------creation de setters-------*/
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function setAge($age) {
        $this->age = $age;
    }
    public function setSexe($sexe) {
        $this->sexe = $sexe;
    }




}