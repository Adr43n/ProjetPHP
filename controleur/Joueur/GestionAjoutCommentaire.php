<?php
require_once __DIR__ . '/../../modele/Commentaire.php';
require_once __DIR__ . '/../../modele/dao/DaoCommentaire.php';
require_once __DIR__ . '/../../bd/pdo.php';

$id_joueur = $_GET['id'] ?? null;
if (!$id_joueur) {
    die("Joueur manquant");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $commentaire = new Commentaire(
        uniqid(),
        $_POST['commentaire'],
        date('Y-m-d'),
        $id_joueur
    );

    $dao = new DaoCommentaire($pdo);
    $dao->create($commentaire);

    header("Location: liste.php");
    exit;
}
