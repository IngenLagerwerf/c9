<?php       
// WHERE id = $id





// $sql = "INSERT INTO baan (op_dicht) WHERE id = $id
//  Values ('$op_dicht')";


$sql = "UPDATE baan
SET op_dicht='$op_dicht' WHERE id = $id";




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