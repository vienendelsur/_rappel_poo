<?php

interface Travailleur {// une genre de classe avec 1 méthode et  des propriétés vides une interface ne contient que des données "abstraites"
    public function travailler();
}

// déclaration de la class Employe
class Employe implements Travailleur { // la classe à laquelle on implémente l'interface Travailleur

    public $nom;// ici les propriétésq de notre classe
    public $prenom;
    protected $age; // cette propriété est 'private'

    //la fonction construct est une méthode 'magique' de PHP, elle s'exécute automatiquement à linstanciation de la classe
     public function __construct($prenom, $nom, $age) {// le constructeur se met en marche quand on instancie la classe
        // echo 'toto<br>'; // ici on teste
        $this->prenom = $prenom; //$this->prenom fais référence à la propriété nom de notre classe et $nom est le paramètre attendu
        $this->nom = $nom;
        $this->setAge($age);
    }

    // les setter et les getters (accesseurs et mutateurs) nous permettent d'accéder à nos propriétés prives depuis l'esxtérieur de la classe

    // une fonction setter
    public function setAge($age) { //setter
        if(is_int($age) && $age >= 16 && $age <= 99) {
            $this->age = $age;
           } else {
            //    var_dump($age);
            echo "Erreur mon cher";
            //    die("Erreur mon cher"); die() arrête le programme
           }
    }

    // une fonction getter
    public function getAge($age) { // getter
        return $this->age;
    }

    public function presentation() {// ici nous avons une fonciton dite méthode notre classe
        echo "<p>Bonjour je m'appelle $this->prenom $this->nom et j'ai $this->age ans.</p>";// $this-> me permet d'accéder à la propriété
    }

    public function travailler() {
        return " Je suis un employe et je chrabonne";
    }

}

//2 CLASSE PATRON

class Patron extends Employe {
    public $salaire; // une propriété on surchage la classe avec une nouvelle propriété

    public function __construct($prenom, $nom, $age, $salaire) {
        parent::__construct($prenom, $nom, $age); //opérateur un peu chelou
        $this->salaire = $salaire;
    }

    public function riche() { // ic on surcharge avec une nouvelle méthode
        echo 'je suis riche';
    }

    public function presentation() {// ici nous redéfinissons la méthode présentation() de Employe
        echo "<p style=\"color:blue;font-size:18px;\">Bonjour je suis le patron j'ai $this->age ans mon prénom est $this->prenom et je gagne $this->salaire euros par jour</p>",
        ($this->riche());
    }

    public function travailler() {
        return " Je suis le patron et je supervise";
    } 
}

// déclaration d'une instance de la classe Employe
$employe1 = new Employe('Marguerite', 'Duras', 50);
$employe2 = new Employe('Marguerite', 'Yourcenar', 50);
// déclaration d'une instance de la classe Patron
$patron = new Patron('Duroc', 'Jean-Michel', 56, 5000);

// ici une fonction pour le plaisir
// on nouse demande une fonction pour faire travailler cette fonction attend obligatoirement un objet ayant une méthode travailler: {$objet->travailler()}
/* Pour répondre à la demande client nous décidons  de créer une interface "Travailleur" ayant une méthode abstraite une méthode travailler() popur forcer les classes qui l'implémenteraient à redéfinir cette même méthode 
*/
function faireTravailler($objet) {
    // print_r("Travail en cours : {$objet->travailler()}");
    echo "<p style=\"color:red;font-size:18px;\">Travail en cours : {$objet->travailler()}";
}

// $employe1->prenom = 'Jacques';
// $employe1->nom = 'Dutronc';
// $employe1->age = 50;
// $employe2->prenom = 'Marguerite';
// $employe2->nom = 'Yourcenar';
// $employe2->age = 80;


$employe1 -> presentation();// toutes les classes peut implémenter l'interface travailleur à condition de respecter le contrat => cad redéfinir la méthode
$employe2 -> presentation();
echo '<hr>';
$patron->presentation();
$patron->riche();

echo '<hr>';

faireTravailler($employe1);
faireTravailler($patron);
faireTravailler($employe1);

echo '<hr>';
