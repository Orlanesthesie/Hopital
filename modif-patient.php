<?php include './partials/header.php'?>
<?php 

if (!empty($_GET['id'])) {

    require_once './config/db_connexion.php';

    $preparedRequest =  $connexion->prepare("SELECT * FROM patients WHERE id = " . $_GET['id']);
    $preparedRequest->execute();
    $patient = $preparedRequest->fetch(PDO::FETCH_ASSOC);
} else {
    header('Location: ./liste-patients.php?error=Veuillez réessayer');
}
?>


<!-- Formulaire pour modifier les informations du patient -->
<p class="m-3">Cliquez sur envoyer pour enregistrer les modifications</p>

<form action="./process/patient/process-modif-patient.php?id=<?= $_GET['id'] ?>" method="post" class="p-3">
    <div class="mb-3">
        <input type="text" name="firstname" placeholder="prenom" value="<?= $patient['firstname'] ?>">
        </div>
        <div class="mb-3">
            <input type="text" name="lastname" placeholder="nom" value="<?= $patient['lastname'] ?>">
        </div>
        <div class="mb-3">
            <input type="date" name="birthdate" placeholder="date" value="<?= $patient['birthdate'] ?>">
        </div>
        <div class="mb-3">
            <input type="tel" name="phone" placeholder="telephone" value="<?= $patient['phone'] ?>">
        </div>
        <div class="mb-3">
            <input type="email" name="mail" placeholder="email" value="<?= $patient['mail'] ?>">
        </div>
        <button type="submit" class="btn btn-danger"> Envoyer </button>
    </form>
    
    
    <?php include './partials/footer.php'?>