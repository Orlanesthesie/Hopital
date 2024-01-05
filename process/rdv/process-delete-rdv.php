<?php
if (!empty($_GET['id'])) {
    //Connexion a la BDD
    require_once '../../config/db_connexion.php';

    $preparedRequest = $connexion->prepare(
        "DELETE FROM DELETE FROM appointments WHERE id = {$_GET['id']}"
    );
    // Lancement de la requete sql
    $preparedRequest->execute([
        $_GET['id']
    ]);

    header('Location: ../../liste-rdv.php?success=Le rendez-vous a bien été supprimé !');
}else{
    header('Location: ../../liste-rdv.php?error=Erreur lors de la suppression du rendez-vous');
}