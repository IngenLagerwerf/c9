<?php

$sql = "SELECT * FROM werkzoekers where baan_id = $id" ;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result

foreach ($result as $key => $row)  {
    $id = $row['id'];
    $voornaam = $row['voornaam'];
    $achernaam = $row['achernaam'];
    $emaill = $row['emaill'];
    $telfoon_nummer = $row['telfoon_nummer'];
    $diploma = $row['diploma'];
    $cv = $row['cv'];
    $motievatsie = $row['motievatsie'];
    include("mensen.inc.php");
    }