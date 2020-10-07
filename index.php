<?php

# Importation de notre classe Ecole
require_once 'models/Ecole.php';
/**
 * Création d'un instance de la class Ecole.
 * Notre variable $ecole est un objet de cette class.
 * Cet objet a accès aux propriétés et méthodes de la class.
 */

#$ecole = new Ecole();

#Affecter des valeurs aux propriétés notre objet
#$ecole->nom = "Webforce3";
#$ecole->adresse = "9 Rue Geoffroy L'Asnier, 75004 Paris";
#$ecole->capacite = 20;
#$ecole->type = "Formation";
#$ecole->directeur = "Sylviane PEREZ";

#Créons un nouvel objet et hydratons le.
#$ecole2 = new Ecole();
#$ecole2->nom = "Ecole 42";
#$ecole2->adresse = "Boulevard de Clichy, 75017 Paris";
#$ecole2->capacite = 300;
#$ecole2->type = "Formation";
#$ecole2->directeur = "Xavier NIEL";

$ecole = new Ecole(
    'WF3',
    "9 Rue Geoffroy L'Asnier, 75004 Paris",
    18,
    'formation',
    'Sylviane PEREZ'

);

$ecole2 = new Ecole(
    'Ecole42',
    'Boulevard de Clichy, 75017 Paris',
    300,
    'Formation',
    'Xavier NIEL'

);

echo '<pre>';
print_r( $ecole );
print_r( $ecole2 );
echo '</pre>';

# Affichez le nom de l'école dans une balise h1
#echo '<h1>' . $ecole->nom . '</h1>';
#echo '<h1>' . $ecole2->nom . '</h1>';
echo '<h1>' . $ecole->getNom() . '</h1>';

# Grâce au setter, je fournis à mon objet un moyen de modifier la valeur d'une propriété.
$ecole->setNom('WF3 Paris');
echo '<h1>' . $ecole->getNom() . '</h1>';


/*-----------------Classe-----------------------------*/

require_once 'models/Classe.php';
$classe = new Classe(
    '5B',
    20,
    'Rafael'
);
echo '<pre>';
print_r( $classe);
echo '</pre>';

echo '<h1>' . $classe->getNom() . '</h1>';


/*-----------------Eleve-----------------------------*/
require_once 'models/Eleve.php';
$eleve = new Eleve(
    'Patrick',
    'Swayze',
    15,
    'h'

);
echo '<pre>';
print_r( $eleve);
echo '</pre>';

echo '<h1>' . $eleve->getNom() . '</h1>';







