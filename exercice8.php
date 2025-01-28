<?php

class Person {
    
}

class Student extends Person {
    private $grades = [];

    public function getAverage() {
        if (count($this->grades) === 0) {
            return 0;
        }
        return array_sum($this->grades) / count($this->grades);
    }

    public function setGrades(array $grades) {
        $this->grades = $grades;
    }

    public function getGrades() {
        return $this->grades;
    }
}


$student = new Student();
$student->setGrades([15, 18, 12, 20]);
$average = $student->getAverage();
echo "La moyenne des notes est de : " . $average;


/**
 * ÉNONCÉ:
 * Créez une classe Student qui étend Person et ayant pour propriétés 
 * - grades (tableau de notes).
 * Ajoutez une méthode getAverage() qui retourne la moyenne des notes. 
 * Implémentez les getters et setters pour manipuler le tableau de notes.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */
