<?php
require_once __DIR__ . '/../connexion/verificationConnexion.php';
require_once __DIR__ . '/../bd/pdo.php';
require_once __DIR__ . '/../modele/Dao/DaoMatch.php';

$daoMatch = new DaoMatch($pdo);

// Récupération des matchs à venir
$matchs = $daoMatch->findAll();

