<?php
require_once __DIR__ . '/../../controleur/Joueur/GestionAjoutCommentaire.php';
include '../../menu.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un commentaire</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>

<h1>Ajouter un commentaire</h1>

<form method="post" class="formulaire">
    <label for="commentaire">Commentaire</label>
    <textarea name="commentaire" id="commentaire" rows="6" required></textarea>

    <input type="submit" value="Ajouter le commentaire">
    <a href="liste.php" class="bouton-principal">Retour à la liste</a>

</form>

<div style="text-align:center; margin-top:15px;">
</div>

</body>
</html>
