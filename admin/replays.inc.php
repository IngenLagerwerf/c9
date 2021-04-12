<?php      

// $id = $_POST['id'];
// $naam = $_POST['naam'];
// $uitleg = $_POST['uitleg'];
// $diploma = $_POST['diploma'];
// $loon = $_POST['loon'];
// $uuren = $_POST['uuren'];


$sql = "UPDATE baan
SET naam='$naam',uitleg='$uitleg',diploma='$diploma',loon='$loon',uuren='$uuren'
 WHERE id = $id";




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