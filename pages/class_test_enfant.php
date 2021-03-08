<?php 

class Childclass extends Firstclass {

    function parle() {
        echo "J'hérite de la class Firstclass";
    }


    function identification()
    {
        echo "J'hérite de la class Firstclass, Je m'appelle " . $this->getNom() . " " . $this->getPrenom() . " j'ai : " . $this->getAge() . " ans<br>";
    }

}
