<?php

require_once './config/db_connexion.php';

$preparedRequest =  $connexion->prepare("SELECT * FROM patients");
$preparedRequest->execute();
$patients = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include './partials/header.php' ?>


<h2 class="text-center p-5 text-decoration-underline"> Liste de patients </h2>


<table class="table table-striped">
    <thead>
        <tr>
            <th> # </th>
            <th> Firstname </th>
            <th> Lastname </th>
            <th> Mail </th>
            <th> Phone </th>
            <th> Birthdate </th>
            <th> Actions </th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($patients as $patient) {?>
                <tr>
                    <td><?= $patient['id'] ?></td>
                    <td><?= $patient['firstname'] ?></td>
                    <td><?= $patient['lastname'] ?></td>
                    <td><?= $patient['birthdate'] ?></td>
                    <td><?= $patient['mail'] ?></td>
                    <td><?= $patient['phone'] ?></td>
                    <td>
                        <a href="./detail-patient.php?id=<?= $patient['id'] ?>" class="btn btn-outline-info">Voir</a>
                        <a href="./modif-patient.php?id=<?= $patient['id'] ?>" class="btn btn-outline-warning">Modifier</a>
                        <a href="./process/patient/process-delete-patient.php?id=<?= $patient['id'] ?>" class="btn btn-outline-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce patient ?')">Supprimer</a>
                    </td>
                </tr>
            <?php } ?>
</tbody>
</table>

<div class="p-5"><button class=" btn btn-outline-danger"> <a href="./ajout-patient.php" style="color:#FF0000;"> Ajouter un nouveau patient </a></button></div>

<?php include './partials/footer.php'?>