<?php
    $sql = "SELECT * FROM baan where op_dicht = 1" ;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(); // get result
    
    foreach ($result as $key => $row)  {
        $id = $row['id'];
        $naam = $row['naam'];
        $diploma = $row['diploma'];
        $loon = $row['loon'];
        $uuren = $row['uuren'];
        include("baansvacatures.inc.php");
        }