 <?php
# public/index.php 
/****************************
 * Chargement des dépendances
 * ici seulement config.php
 * qui se trouve 1 niveau en
 * dessous
 ****************************/
require_once '../config.php';
// test de la constante racine
// echo "Racine du projet : ".ROOT_PATH."";
// affichage des pages acceptées
// echo "<pre>";
// print_r(ARRAY_VALID_PAGES);
// echo "</pre>";

// appel de la vue ( inclu la page acceuil a la page inde)
if(!isset($_GET['p'])){

    // Nous sommes sur l'accueil
    // chargement de view/acceuil.php
    include ROOT_PATH."/view/acceuil.php";

    // sinon si
}else if (in_array($_GET['p'], ARRAY_VALID_PAGES)){

        include ROOT_PATH."/view/".$_GET['p'].".php";

}else{
    include ROOT_PATH."/view/erreur404.php";
}
