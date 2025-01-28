<?php

class Person {
    protected $first_name;
    protected $last_name;
    protected $age;

    public function __construct($first_name, $last_name, $age) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function afficheInfos() {
        echo "Nom: " . $this->last_name . ", Prénom: " . $this->first_name . ", Âge: " . $this->age . " ans.";
    }

    /**
     * Get the value of first_name
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     */
    public function setFirstName($first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     */
    public function setLastName($last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     */
    public function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }
}

$personne = new Person("Jean", "Dupont", 30);
$personne->afficheInfos();



/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée Person avec des propriétés first_name, last_name et age en protected.
 * Ajouter un conctructeur
 * Ajouter les getters et setters
 * Implémentez une methode afficheInfos() pour afficher les informations de la personne.
 * Créer un nouvel objet et afficher les information
 */
