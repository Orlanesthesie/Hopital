<?php 

if(!empty($_POST['dateHour']) &&
   !empty($_GET['id'])
){
    //Connexion à la bdd
    require_once "../../config/db_connexion.php";

    //Preparation de la requete SQL
    $preparedRequest =  $connexion->prepare(
        "UPDATE appointments SET dateHour=? WHERE id=?"
    );

    //Lancement de la requete SQL
    $preparedRequest->execute([
        $_POST['dateHour'],
        $_GET['id']
    ]);
    header('Location: ../../liste-rdv.php?succes=Le rendez-vous a bien été modifié');
} else {
    header('Location: ./liste-rdv.php?error=Veuillez réessayer');
}
?>