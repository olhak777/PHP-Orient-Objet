<?php

/**
 * Une classe PHP est une entéitée regroupant par theme des variables appelées "propriétés" et des fonctions appelées
 * "méthodes".
 */
class Ecole
{
    /**
     * Déclaration des proprietés de notre class Ecole.
     * ------------------------------------------------
     */
    private $nom;
    private $adresse;
    private $capacite;
    private $type;
    private $directeur;
    private $classes;

    /**
     *  Pour permettre maintenant l'attribution de valeurs à mes propriétés, je vais mettre crée un CONSTRUCTEUR.
     * --------------------------------------------------------------------------------------------------------
     * Il est executée AUTOMATIQUEMENT par PHP au moment de l'instanciation de la classe.
     */

    public function __construct($nom, $adresse, $capacite, $type, $directeur) {
       $this->nom = $nom;
       $this->adresse = $adresse;
       $this->capacite = $capacite;
       $this->type = $type;
       $this->directeur = $directeur;
       $this->classes = [];

    }
    /*-- ---------creation de getters-------*/
    public function getNom() {
        return $this->nom;
    }
    public function getAdresse() {
        return $this->adresse;
    }

    public function getCapacite() {
        return $this->capacite;
    }
    public function getType() {
        return $this->type;
    }
    public function getDirecteur() {
        return $this->directeur;
    }
    public function getClasses() {
        return $this->classes;
    }

    /*-- ---------creation de setters-------*/

    public function setNom($nom) {
        $this->nom = $nom;
    }
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
    }
    public function setCapacite($capacite) {
        $this->capacite = $capacite;
    }
    public function setType($type) {
        $this->type = $type;
    }
    public function setDirecteur($directeur) {
        $this->directeur = $directeur;
    }
    public function setClasses($classes) {
        $this->classes = $classes;
    }
    public function addClasse(Classe $classe) {
        $this->classes[] = $classe;
    }


} // Fin de la classe Ecole