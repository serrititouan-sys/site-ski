<?php
// Sécuriser les données avec htmlspecialchars
$nom = htmlspecialchars($_POST['nom']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
$genre = isset($_POST['genre']) ? htmlspecialchars($_POST['genre']) : "Non précisé";
$pays = htmlspecialchars($_POST['pays']);
$message = htmlspecialchars($_POST['message']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Résultat du formulaire</title>
</head>
<body>
  <h2>Merci pour votre message !</h2>
  <p><strong>Nom :</strong> <?= $nom ?></p>
  <p><strong>Email :</strong> <?= $email ?></p>
  <p><strong>Mot de passe :</strong> (sécurisé, non affiché)</p>
  <p><strong>Genre :</strong> <?= $genre ?></p>
  <p><strong>Pays :</strong> <?= $pays ?></p>
  <p><strong>Message :</strong> <?= nl2br($message) ?></p>
</body>
</html>