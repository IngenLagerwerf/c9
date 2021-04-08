<?php
    $sql = "SELECT * FROM baan LIMIT 4" ;
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(); // get result
    
    foreach ($result as $key => $row)  {
        $id = $row['id'];
        $naam = $row['naam'];
        $uitleg = $row['uitleg'];
        $diploma = $row['diploma'];
        $loon = $row['loon'];
        $uuren = $row['uuren'];
        $op_dicht = $row['op/dicht'];
    
       
        }