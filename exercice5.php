<?php
# Classe Math

class Math {
    public static function add(float $a, float $b):float 
    {
        return $a + $b;
    }

    public static function substract(float $a, float $b):float 
    {
        return $a - $b;
    }

    public static function multiply(float $a, float $b):float
    {
        return $a * $b;
    }
}

$a = 5;
$b = 6;

echo "Addition: " . Math::add($a, $b) . "\n";
echo "Soustraction: " . Math::substract($a, $b) . "\n";
echo "Multiplication: " . Math::multiply($a, $b) . "\n";

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */
