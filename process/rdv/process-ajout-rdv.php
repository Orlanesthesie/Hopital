<?php

//include '../../config/debug.php';

if (!empty($_POST['dateHour']) 
    && !empty($_POST['idPatients'])) {
        //Connexion a la BDD
        require_once '../../config/db_connexion.php';
        //Préparation de la requete SQL 
        $preparedRequest = $connexion->prepare(
            "INSERT INTO appointments (dateHour, idPatients) VALUES (?,?)"
        );
        // Lancement de la requete sql
        $preparedRequest->execute([
            $_POST['dateHour'],
            $_POST['idPatients'],
        ]);
        // Redirection de l'utilisateur sur la page index ou list-patient
        header('Location: ../../liste-rdv.php?success=Le patient a bien été enregistré !');
}else{
    header('Location: ../../ajout-rdv.php?error=Erreur lors de l\'enregistrement du patient');
}