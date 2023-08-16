<?php
include 'cnxbdd.php';

if  (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST')  {
    // Récupération des données du formulaire
    $type = $_POST['type'];
    $date = $_POST['date'];
    $description = $_POST['description'];
 
     // Insertion des données dans la table utilisateur
     $stmt = $cnx->prepare('INSERT INTO evenement (Type, Date, Description) VALUES (:type, :date, :description)');
     $stmt->bindParam(':type', $type);
     $stmt->bindParam(':date', $date);
     $stmt->bindParam(':description',  $description);
     $stmt->execute();
 
      header('Location: ../Afficher.php');
     exit;
 }
?>