<?php

include "setting.php"; // include de la connection a la base de données

$cities = $pdo->prepare('SELECT * FROM ville');
$cities->execute();

$jour = $cities->fetchAll(PDO::FETCH_OBJ);