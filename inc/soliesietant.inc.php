<?php    
    $sql = "INSERT INTO werkzoekers (baan_id, voornaam, achernaam, emaill, telfoon_nummer, diploma, cv, motievatsie)
     Values ('$id','$voornaam','$achernaam','$emaill','$telfoon_nummer','$diploma','$cv','$motievatsie')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    try{
    
    //    $stmt->execute(array(NULL,$id,$voornaam,$achernaam,$emaill,$telfoon_nummer,$diploma,$cv,$motievatsie));
        $melding = "repratie toegevoegd.";
        
    }catch(PDOException $e){
        $melding = "Kon geen repratie aanmaken.".$e->getMessage();
    }
    echo "<div hidden id='melding'>".$melding."</div>";
?>    