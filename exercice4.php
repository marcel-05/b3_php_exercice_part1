<?php

class Article {
    public $title;
    public $content;

    public function getSummary($maxLength) {
        if (strlen($this->content) > $maxLength) {
            return substr($this->content, 0, $maxLength) . '…';
        }
        return $this->content;
    }
}

$article = new Article();
$article->title = "Le Titre";
$article->content = "Ceci est le contenu de l'article qui peut être long et nécessiter d'un bon résumé.";

echo "Titre: " . $article->title . "\n";
echo "Résumé: " . $article->getSummary(50) . "\n";

?>

/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos

 */
