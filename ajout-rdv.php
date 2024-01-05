<?php

require_once './config/db_connexion.php';

$preparedRequest =  $connexion->prepare("SELECT * FROM patients");
$preparedRequest->execute();
$patients = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);
?>

<?php include './partials/header.php'?>

<h2 class="text-center p-5 text-decoration-underline"> Ajouter un rendez-vous </h2>

<div class="mx-auto card" style="width: 25em">
    <div class="container">
    <img src="./img/rdv.jpg" class="w-50 d-block mx-auto my-4">
        <div class="card-body"> 
            <form action="./process/rdv/process-ajout-rdv.php" method="post">
                <div class="d-flex justify-content-center p-3">
                    <select name="idPatients" id="idPatients">
                    <?php foreach ($patients as $patient){
                        echo "<option value='" . $patient['id'] . "'>" . $patient['firstname'] . " " . $patient['lastname'] . "</option>";
                }
                ?>
                    </select>
                </div>
                <div class="d-flex justify-content-center p-3"> 
                    Date et heure:
                <input type="datetime-local" name="dateHour" placeholder="date"> 
                </div>
            <div class="d-flex justify-content-center"> 
                <button type="submit" class="btn btn-danger m-3"> Ajouter le rendez vous</button> </div>
            </form>
        </div>
    </div>
</div>

<?php include './partials/footer.php'?>