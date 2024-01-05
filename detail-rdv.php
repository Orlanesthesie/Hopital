<?php    
if (!empty($_GET['id'])) {
    
    require_once './config/db_connexion.php';
    
    $preparedRequest =  $connexion->prepare("SELECT appointments.id AS appointments_id, appointments.dateHour, !!! FROM appointments JOIN patients ON patients.id = appointments.idPatients WHERE appointments.id = ?");
    $preparedRequest->execute($_GET['id']);
    $patient = $preparedRequest->fetch(PDO::FETCH_ASSOC);
} else {
    header('Location: ./liste-rdv.php?error=Veuillez réessayer');
}
?>
<?php include './partials/header.php'?>

    <h2 class="text-center p-5 text-decoration-underline"> Detail du rendez-vous </h2>
    <p class="m-3"> Vous pouvez modifier les informations du rendez-vous</p>

    <div class="p-3"> 
     <p> Nom : <?= $data['lastname'] ?> </p>
     <p> Prénom : <?= $data['firstname'] ?> </p> 
     <p> Date et Heure : <?= $data['dateHour'] ?> </p>
    </div>
    <div class="p-3"><button class="btn btn-outline-danger"><a href="./modifier-rdv.php?id=<?= $data['id'] ?>" style="color:#FF0000;"> Modifier </a></button></div>
  
<?php include './partials/footer.php'?>