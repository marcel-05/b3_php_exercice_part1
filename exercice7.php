<?php 

class BankAccount {
    private $balance;

    public function __construct($initialBalance) {
        $this->balance = $initialBalance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        echo "Dépôt de $amount. Nouveau solde: " . $this->balance . "\n";
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Retrait de $amount. Nouveau solde: " . $this->balance . "\n";
        } else {
            echo "Fonds insuffisants pour retirer $amount. Solde actuel: " . $this->balance . "\n";
        }
    }
}

$compte = new BankAccount(100);
$compte->deposit(50);
$compte->withdraw(30);
$compte->withdraw(150);

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/