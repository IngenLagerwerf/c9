<?php
    $sql = "INSERT INTO baan (naam, uitleg, diploma, loon, uuren, op_dicht)
    Values ('$naam','$uitleg','$diploma','$loon','$uuren','$op_dicht')";
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