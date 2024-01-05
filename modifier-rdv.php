<?php 

if(!empty($_POST['dateHour']) &&
   !empty($_GET['id'])
){

require "./config/db_connexion.php";

$preparedRequest =  $connexion->prepare("SELECT * FROM appointments WHERE id = " . $_GET['id']);
$preparedRequest->execute();
$patient = $preparedRequest->fetch(PDO::FETCH_ASSOC);
} else {
    header('Location: ./liste-rdv.php?error=Veuillez réessayer');
}
?>
<?php include './partials/header.php'?>

    
<h2 class="text-center p-5 text-decoration-underline"> Modifier un rendez-vous </h2>


<form action="./process/rdv/process-modif-rdv.php?id=<?=$appointments['id']?> " method="post" class="p-3">
        <div class="mb-3"> Date souhaitée: <input type="datetime-local" name="dateHour" value="<?=$appointments['dateHour']?>"> </div>    
        <div> <button type="submit" class="btn btn-danger m-3"> Envoyer </button> </div>
    </form>

    <?php include './partials/footer.php'?>