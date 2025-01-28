<?php
class Movie {
    public $title;
    public $genre;
    public $ageRestriction;

    public function __construct($title, $genre, $ageRestriction) {
        $this->title = $title;
        $this->genre = $genre;
        $this->ageRestriction = $ageRestriction;
    }

    public function canWatch($viewerAge) {
        return $viewerAge >= $this->ageRestriction;
    }
}

$film = new Movie("Inception", "Science-Fiction", 13);
$ageViewer = 15;

if ($film->canWatch($ageViewer)) {
    echo "Vous pouvez regarder " . $film->title;
} else {
    echo "Vous ne pouvez pas regarder " . $film->title;
}



/**
 * ÉNONCÉ:
 * Créez une classe Movie avec les propriétés 
 * title, genre et ageRestriction. 
 * Ajoutez une méthode canWatch($viewerAge) qui retourne true 
 * si l’âge du spectateur ($viewerAge) est supérieur ou égal à ageRestriction, 
 * sinon false.
  * En dessous de la classe, créer un objet et appeler les méthodes
 */
