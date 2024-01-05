<?php
if (!empty($_GET['id'])) {
    //Connexion a la BDD
    require_once '../../config/db_connexion.php';

    $preparedRequest = $connexion->prepare(
        "DELETE FROM patients WHERE id = ?"
    );
    // Lancement de la requete sql
    $preparedRequest->execute([
        $_GET['id']
    ]);

    header('Location: ../../liste-patients.php?success=Le patient à bien été supprimé !');
}else{
    header('Location: ../../liste-patients.php?error=Erreur lors de la suppression du patient');
}