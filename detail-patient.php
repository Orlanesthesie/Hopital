<?php

if (!empty($_GET['id'])) {

    require_once './config/db_connexion.php';

    $preparedRequest =  $connexion->prepare("SELECT * FROM patients WHERE id = " . $_GET['id']);
    $preparedRequest->execute();
    $patient = $preparedRequest->fetch(PDO::FETCH_ASSOC);
} else {
    header('Location: ./liste-patient.php?error=Veuillez réessayer');
}
?>
<?php include './partials/header.php' ?>

<h2 class="text-center p-5 text-decoration-underline"> Detail patient </h2>

    <table class="table table-striped">
    <thead>
        <tr>
            <th> # </th>
            <th> Firstname </th>
            <th> Lastname </th>
            <th> Mail </th>
            <th> Phone </th>
            <th> Birthdate </th>
            <th> Appointments </th>
            <th> Actions </th>
        </tr>
    </thead>
    
    <tbody>
        <tr> 
            <td> <?= $patient['lastname'] ?> </td>
            <td> <?= $patient['firstname'] ?> </td> 
            <td> <?= $patient['id'] ?> </td>
            <td> <?= $patient['mail'] ?> </td>
            <td> <?= $patient['phone'] ?> </td>
            <td> <?= $patient['birthdate'] ?> </td>
            <td> <?php $requete = "SELECT appointments.dateHour FROM appointments INNER JOIN patients ON appointments.idPatients = patients.id WHERE appointments.idPatients= ".$_GET["id"]."";
            $resultat = $connexion->query($requete);
            while ($data = $resultat-> fetch(PDO::FETCH_ASSOC)) { ?>
            <?= $data['dateHour'] ?> <br> <?php } ?>  </td>
            <td>
                <a href="./modif-patient.php?id=<?= $patient['id'] ?>" class="btn btn-outline-warning mx-2">Modifier</a>
                <a href="./suppression-patient.php?id=<?= $data['id']; ?>" class="btn btn-outline-danger mx-2">Supprimer</a>
            </td>
        </tr>




<?php include './partials/footer.php' ?>