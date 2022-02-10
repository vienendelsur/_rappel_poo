<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Rappel POO</h1>

   <div class="container bg-warning">
   <section class="row">
        <div class="col-6 bg-light">
            <h3>les inconvénients=></h3>
            <ul>
              <li> Techniquement on ne peut rien faire de plus avec l'orienté objet qu'avec le procédural</li>
              <li>En général, l'approche orientée objet est moins intuitive pour l'esprit humain</li>
              <li>Légère perte de performance</li>
            </ul>
           
        </div>

        <div class="col-6">
            <h3>les inconvénients=></h3>
            <h3>Les avantages=></h3>
            <ul>
              <li> Organisation du code :</li>
              <li>un code organisé sous forme de classes (qui sont des objets) et cela va fortement nous aider à nous retrouver dans notre code => on va pouvoir développer plus vite</li>
            </ul>
            <ul>
              <li>en exemple d'organisation</li>
              <li>des modèles pour l'accès aux données</li>
              <li></li>
              <li></li>
            </ul>
            <?php

            class Felin {
              public $taille;// ici on a des variables qui sont en réalités des propriétés au sein d'une classe
              public $pelage;
              public $age;
          }

          class Chat extends Felin {
            public function miauler() { // au sein d'une classe les fonctions sont appelées  "méthodes"
                echo 'miaou';
            }

        }

        $chat1 = new Chat(); // on fait une instance de la classe Chat avec le mot clef "new", on obtient alors un objet $chat1
        $chat1->taille = '20 cm'; // pour accéder aux propriétés au aux méthodes d'objets on utilise l'opérateur -> (attention pas de $)
        echo $chat1->taille;
        $chat1->taille; // 20 cm
        $chat1->miauler(); // retourne miaou

            ?>
        </div>
    </section>
   </div>
    
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>