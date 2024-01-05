<?php require "./config/db_connexion.php"; ?>
<?php include './partials/header.php'?>


<h2 class="text-center p-5 text-decoration-underline"> Liste des rendez-vous </h2>

<table class="table table-striped">
    <thead>
        <tr>
            <th> # </th>
            <th> Lastname </th>
            <th> Firstname </th>
            <th> DateHour </th>
            <th> Actions </th>
        </tr>
    </thead>
    <tbody>
<?php
$requete = "SELECT patients.id, patients.lastname, patients.firstname, appointments.id, appointments.dateHour FROM patients INNER JOIN appointments ON appointments.idPatients = patients.id ";
$resultat = $connexion->query($requete);
while ($data = $resultat-> fetch(PDO::FETCH_ASSOC)) { ?>
    <tr> <td> <?= $data['id'] ?> </td>
         <td> <?= $data['lastname'] ?> </td>
         <td> <?= $data['firstname'] ?> </td> 
         <td> <?= $data['dateHour'] ?> </td>
         <td> 
            <a href="./detail-rdv.php?id=<?= $data['id']; ?>" class="btn btn-outline-info p-1"> Voir </a>
            <a href="./modifier-rdv.php?id=<?= $data['id']; ?>" class="btn btn-outline-primary p-1"> Modifier </a>
            <a href="./suppression-rdv.php?id=<?= $data['id']; ?>" class="btn btn-outline-danger btn-action" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce rendez-vous ?')">Supprimer</a>

        </td>
       </tr>
        <?php
}
?>
</tbody>
</table>

<div class="p-5"><button class="btn btn-outline-danger"> <a href="./ajout-rdv.php" style="color:#FF0000;"> Ajouter un nouveau rendez-vous </a> </button> 

<?php include './partials/footer.php'?>