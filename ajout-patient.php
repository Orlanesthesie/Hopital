<?php include './partials/header.php'?>

<h2 class="text-center p-5 text-decoration-underline"> Ajout d'un nouveau patient </h2>
   
<div class="mx-auto card" style="width: 25em">
    <div class="container">
        <img src="./img/patient.jpg" class="w-50 d-block mx-auto my-4">
            <div class="card-body"> 
                <form action="/process/patient/process-ajout-patient.php" method="post" class="">
                    <div class="d-flex justify-content-center py-3"> <input type ="text" name="firstname" placeholder="prenom" class="form-control">  </div>
                    <div class="d-flex justify-content-center"> <input type ="text" name="lastname" placeholder="nom" class="form-control"> </div>
                    <div class="d-flex justify-content-center py-3"> <input type ="date" name="birthdate" class="form-control">  </div>
                    <div class="d-flex justify-content-center"> <input type ="tel" name="phone" placeholder="telephone" class="form-control"> </div>
                    <div class="d-flex justify-content-center py-3"> <input type="email" name="mail" placeholder="email" class="form-control"> </div>
                    <div class="d-flex justify-content-center"> <button type="submit" class="btn btn-danger"> Envoyer </button>  </div>
                </form>
            </div>
    </div>
</div>

<?php include './partials/footer.php'?>