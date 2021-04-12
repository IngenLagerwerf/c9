<?php






    $sql = "SELECT * FROM baan where id = $id" ;
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
        $op_dicht = $row['op_dicht'];
        }

        $aantal_soliesietanten = 0;
        $sql = "SELECT * FROM werkzoekers where baan_id  = $id" ;
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(); // get result
        foreach ($result as $key => $row)  {

        $aantal_soliesietanten ++;
    
        }






        if ($op_dicht == 1) {

            $text = "vakaturen open";


        include("foormat.inc.php");
        }

        elseif($op_dicht == 0){
         
            $text = "vakaturen dicht";
            include("foormat.inc.php");
        }