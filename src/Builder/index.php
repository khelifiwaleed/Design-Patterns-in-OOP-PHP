<?php

use DesignPatterns\Builder\{
    FamilyCar,
    SportsCar,
    CarBuilder,
    CarDirector
};

// On crée un builder avec un objet FamilyCar (modèle de voiture familiale)
$familyCarBuilder = new CarBuilder(new FamilyCar());
$familyCar = $familyCarBuilder// On construit manuellement la voiture en définissant chaque caractéristique
    ->setEngine("V4")         // Choix du moteur
    ->setColor("Green")       // Couleur de la voiture
    ->setDoors(4)             // Nombre de portes
    ->build();                // Construction finale de l'objet
$familyCar->show();// Affiche les détails de la voiture construite


// On instancie un Director qui connaît les étapes de construction pour différents modèles
$director = new CarDirector();
// On demande au director de construire une voiture sportive
// Il utilise un builder configuré avec une SportsCar
$sportsCar = $director->buildSportsCar(
    new CarBuilder(new SportsCar())
);
$sportsCar->show();// Affiche les détails de la voiture sportive construite

