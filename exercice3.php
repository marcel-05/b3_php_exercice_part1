<?php
require_once 'exercice2.php';

class Employee extends Person {
    private $salary;
    private $position;

    public function __construct($name, $age, $salary, $position) {
        parent::__construct($name, $age);
        $this->salary = $salary;
        $this->position = $position;
    }

    public function afficheInfos() {
        parent::afficheInfos();
        echo "Salaire: " . $this->salary . "\n";
        echo "Poste: " . $this->position . "\n";
    }
}

$employee = new Employee("Jean Dupont", 30, 50000, "Développeur");
$employee->afficheInfos();
?>


/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */
