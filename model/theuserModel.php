/*exercice création de la page theuserModel.php
création de la fonction theuserSelectOneById
Elle va récupérer les champs idtheuser, theuserName, theuserLogin de la table theuser ET le champs therightName, therightdesc et therightPerm du rôle lié à cette utilisateur : jointure interne amenant theright. Cette fonction renvoit un tableau associatif ou du NULL
*/
<?php
function theuserSelectOneById(mysqli $db, int $id): ?array
{
    $sql = " SELECT idtheuser, theuserName, theuserLogin, therightName, therightdesc, therightPerm,
    FROM theuser
        INNER JOIN theright
            ON theright_idtheright = idtheright
    WHERE idtheuser=$id;";
    $_REQUEST = mysqli_query($db, $sql) or die("Erreur SQL :" . mysqli_error($db));

    return mysqli_fetch_assoc($request);
}
