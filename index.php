<?php

# Importation de notre classe Ecole
require_once 'models/Ecole.php';

# Importation de notre classe Eleve
require_once 'models/Eleve.php';

# Importation de notre classe Classe
require_once 'models/Classe.php';
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





/*-----------------Creation des Eleve-----------------------------*/
$eleve1 = new Eleve('Zaklin', 'POCANDI', 49, 'femme');
$eleve2 = new Eleve('Koumba', 'KONARE', 28, 'femme');
$eleve3 = new Eleve('Emmanuelle', 'ARNAUD', 33, 'femme');
$eleve4 = new Eleve('Sandra', 'JACQUES', 48, 'femme');



echo '<pre>';
print_r( $eleve1);
print_r( $eleve2);
print_r( $eleve3);
print_r( $eleve4);
echo '</pre>';

echo '<h1>' . $eleve1->getNom() . '</h1>';


/*-----------------Création des Classes-----------------------------*/
$front = new Classe('Front', 18, 'Fahdi NASRI');
$back = new Classe('Back', 18, 'Mathieu QUITTARD');
$full = new Classe('Fullstack', 18, 'Hugo LIEGEARD');



'<hr><hr>';

#Problématique
# Comment affecter chaque élève dans une classe ?
$front->addEleve($eleve2);
$front->addEleve($eleve4);

$back->addEleve($eleve1);
$full->addEleve($eleve3);
echo '<pre>';
print_r( $front);
print_r( $back);
print_r( $full);
echo '</pre>';

# Comment affecter chaque classe dans une école ?

$ecole->addClasse($front);
$ecole->addClasse($back);
$ecole->addClasse($full);


echo '<pre>';
print_r($ecole);
echo '</pre>';

/**
 * CONSIGNE : En partant de l'objet $ecole ; affichez la liste ol, ul, li des classes les étudiants.
 */
#1. Recupererez via $ecole et afficher la liste des classes
$classes = $ecole->getClasses();



# On va parcourir nos classes
    echo '<ol>';
/** @var Classe $classe */
foreach ($classes as $classe) {

    # Afficher le nom de la classe
    echo '<li>';
         echo $classe->getNom();
    echo '</li>';

    #2. Récuperer et afficher la liste des éleves
    $eleves = $classe->getEleves();
    echo '<ul>';
    /** @var Eleve $eleve */
    foreach ($eleves as $eleve) {
    echo '<li>';
    echo $eleve->getPrenom() . ' ' . $eleve->getNom();
    echo '</li>';

    } #endforeache eleves

    echo '</ul>';



} #endforeach classes
   echo '</ol>';







