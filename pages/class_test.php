<?php

class Firstclass
{

    var $nom    = "Dupont";
    var $prenom = "Loris";
    var $age    = 16;


    // Fonction appelé lors de l'instentiation de l'objet
    function __construct($myName, $myFirstName, $myAge)
    {
        $this->nom    = $myName;
        $this->prenom = $myFirstName;
        $this->age    = $myAge;
    }


    // Récupération des variables
    function getNom()
    {
        return $this->nom;
    }

    function getPrenom()
    {
        return $this->prenom;
    }

    function getAge()
    {
        return $this->age;
    }


    // Attribution de valeur
    function setNom($newNom)
    {
        $this->nom = $newNom;
    }

    function setPrenom($newPrenom)
    {
        $this->prenom = $newPrenom;
    }

    function setAge($newAge)
    {
        $this->age = $newAge;
    }


    // Méthode
    function vieillir($annees)
    {
        $this->setAge($this->getAge() + $annees);
    }

    // Affichage
    function identification()
    {
        echo "Je suis " . $this->getNom() . " " . $this->getPrenom() . " j'ai : " . $this->getAge() . " ans<br>";
    }

    
}

