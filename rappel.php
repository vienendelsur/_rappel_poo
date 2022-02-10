<?php
/* La poo 

les inconvénients=>
- Techniquement on ne peut rien faire de plus avec l'orienté objet qu'avec le procédural
- En général, l'approche orientée objet est moins intuitive pour l'esprit humain
- Légère perte de performance


Les avantages=>
- Organisation du code : 
un code organisé sous forme de classes (qui sont des objets) et cela va fortement nous aider à nous retrouver dans notre code => on va pouvoir développer plus vite

en exemple d'organisation 
- des modèles pour l'accès aux données 
- des controllers pour les différentes actions (ajouter, supprimer ou mettre à jour un article)
-  Des classes statiques pour toutes les fonctionnalités utilitaires

- Sécurité dans le code avec l'encapsulation
Cela va nous permettre de sécuriser le code vis à vis d'éventuels erreurs que l'on pourrait commettre par exemple ne pas modifier une variable au risque de casser le code

- Réutilisation du code via l'héritage
Cela va nous permettre la réutilisation de notre code et son éventuelle évolution 
(une classe est un modèle, une représentation)
Un modèle et ses enfants 

class Felin {
    public $taille;// ici on a des variables qui sont en réalités des propriétés au sein d'une classe
    public $pelage;
    public $age;
}

class Chat extends Felin {
    public function miauler() { // au sein d'une classe les fonctions sont appelées  "méthodes"
        return 'miaou';
    }
}

$chat1 = new Chat(); // on fait une instance de la classe Chat avec le mot clef "new", on obtient alors un objet $chat1
$chat1->taille = '20 cm'; // pour accéder aux propriétés au aux méthodes d'objets on utilise l'opérateur -> (attention pas de $)
echo $chat1->taille;
$chat1->taille; // 20 cm
$chat1->miaulier(); // retourne miaou

Contrôle du code : l'abstraction et les interface
- Un terme techinque qui signifie que l'on veut obliger certaines classe à implémenter telle propriété ou telle péthode

interface Griffeur {
    public function griffer();
}

class Chat extends Felin implements Griffeur {
    public function miauler() {
        return 'miaou';
    }
}


*/

$nom = 'Dupont';
$prenom = 'Céline';
$age = 10;

$nom2 = 'John';
$prenom2 = 'Wayne';
$age2 = 54;

function presentation($nom,  $prenom, $age) {
    echo("Bonjour mon nom est $prenom $nom et j'ai $age ans<br>");
}

presentation($nom,  $prenom, $age);
presentation($nom2,  $prenom2, $age2);