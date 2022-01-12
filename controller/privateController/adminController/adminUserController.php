<?php

echo 
var_dump($_GET);

/*
Si on veut supprimer un utilisateur (cruD)
*/
if (
    isset($_GET['delete']) &&
    ctype_digit($_GET['delete']) &&
    !empty($_GET['delete'])
) {

    $iduser = (int) $_GET['delete'];

 

    // sélection de l'utilisateur
    $user = theuserSelectOneById($dbConnect, $iduser);

    // Appel de la vue
    require_once "../view/adminView/usersDeleteAdminView.php";

    /*
Création d'un utilisateur
*/
} 

elseif (
    isset($_GET['create'])
) {
require_once "../view/adminView/usersCreateAdminView.php";
}

    /*
Update d'un utilisateur
*/


elseif (
    isset($_GET['update']) &&
    ctype_digit($_GET['update']) &&
    !empty($_GET['update'])
) {
    require_once "../view/adminView/usersUpdateAdminView.php";
    }

else {
    $recupUsers = theuserWithRightSelectAll($dbConnect);
    // appel de la vue (cRud)
    require_once "../view/adminView/usersAdminView.php";
}

