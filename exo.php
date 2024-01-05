
//      LIRE DES DONNEES

// Exercice 1 Afficher tous les clients.
// $requete = "SELECT * FROM showTypes ";


// Exercice 2 Afficher tous les types de spectacles possibles.
// $requete = "SELECT * FROM clients ";


// Exercice 3 Afficher les 20 premiers clients.
// $requete = "SELECT * FROM clients LIMIT 20";


// Exercice 4 N'afficher que les clients possédant une carte de fidélité.
// $requete = "SELECT * FROM clients WHERE card = 1";


// Exercice 5 Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M". Les afficher comme ceci : Nom : Nom du client. Prénom : Prénom du client. Trier les noms par ordre alphabétique.
// $requete = "SELECT lastName, firstName FROM clients WHERE lastName LIKE 'M%' ORDER BY lastName ASC";
//  $resultat = $connexion->query($requete);
// while ($data = $resultat-> fetch(PDO::FETCH_ASSOC)) {
//     echo "<p> Nom : ".$data['lastName']." </p>" ; 
//     echo "<p> Prénom : ".$data['firstName']." </p>" ; 
//     echo "<hr>";


// Exercice 6 Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure. Trier les titres par ordre alphabétique. Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.
// $requete = "SELECT title, performer, date, startTime FROM shows";
// $resultat = $connexion->query($requete);
// while ($data = $resultat-> fetch(PDO::FETCH_ASSOC)) {
//     echo $data['title']. " par ".$data['performer'].", le " .$data['date']. " à " .$data['startTime']. "." ;
//     echo "<hr>";
// }


// Exercice 7 Afficher tous les clients comme ceci : Nom : Nom de famille du client. Prénom : Prénom du client. Date de naissance : Date de naissance du client. Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas). Numéro de carte : Numéro de la carte fidélité du client s'il en possède une.
// $requete = "SELECT * FROM clients";
// $resultat = $connexion->query($requete);
// while ($data = $resultat-> fetch(PDO::FETCH_ASSOC)) {
//     echo "<p> Nom : " .$data['lastName']. "</p> ";tertiary
//     echo "<p> Prenom : " .$data['firstName']. "</p> " ;
//     echo "<p> Date de naissance : ".$data['birthDate']. "</p>" ;
//     echo "<p> Carte de fidélité : ".$data['card']. "</p>" ;
//     echo "<p> Numéro de carte : ".$data['cardNumber']. "</p>" ;
//     echo "<hr>";
// }


//          ECRIRE DES DONNEES

// Exercice 1 Créer une page ajout-patient.php et y créer un formulaire permettant de créer un patient. Elle doit être accessible depuis la page index.php.
// voir -> ajout-patient.php

// Exercice 2 Créer une page liste-patients.php et y afficher la liste des patients. Inclure dans la page, un lien vers la création de patients.
// voir -> liste-patients.php