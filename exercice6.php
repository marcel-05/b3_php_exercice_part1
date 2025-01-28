<?php

class ShoppingCart {
    private $items = [];
    private $total = 0;

    public function addItem($name, $price) {
        $this->items[] = ['name' => $name, 'price' => $price];
        $this->total += $price;
    }

    public function displayItems() {
        foreach ($this->items as $item) {
            echo "Nom: " . $item['name'] . ", Prix: " . $item['price'] . "€\n";
        }
    }

    public function calculateTotal() {
        return $this->total;
    }
}

$cart = new ShoppingCart();
$cart->addItem('Patate', 1.50);
$cart->addItem('Manioc', 1.20);
$cart->displayItems();
echo "Coût total: " . $cart->calculateTotal() . "€\n";


/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */
