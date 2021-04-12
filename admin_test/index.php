<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <link rel="stylesheet" href="css/navbar.css"/>
    <link rel="stylesheet" href="css/vacatures.css"/>
    
  <title>buurtzorg</title>

</head>



<body>
  <!-- #region Navbar-->
  <div id="navbar">
    <script>
      $("#navbar").load("includes/navbar.php");
    </script>
  </div>
  <!-- #endregion -->
<?php
include_once("connection.php");   
?>

  <div class="vacatures">

  <script src="js/webshop.js"></script>
  <div class="content">
    <form name="search" id="search" action="" method="POST">
      <div>
        <input type="text"  id="patroon" name="patroon" placeholder="Zoek vacatures..." />
        <input type="submit"  id="zoeken" name="zoeken" value="zoek" /> </br>
      </div>
    </form> 
  </div>

  <?php








  ///Hier wordt de sql -opdracht gegenereerd
  if (isset($_POST["zoeken"]) && !empty($_POST["patroon"])) {
    $patroon = htmlspecialchars($_POST["patroon"]);
    $sql = "SELECT * FROM baan WHERE naam LIKE '%$patroon'";
  } else {
    $sql = "SELECT * FROM baan";
  }

  



$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result

foreach ($result as $key => $row)  {
    $id = $row['id'];
    $naam = $row['naam'];
    // $img = $row['foto'];
    $uitleg = $row['uitleg'];
    $diploma = $row['diploma'];
    $loon = $row['loon'];
    $uuren = $row['uuren'];
    $op_dicht = $row['op_dicht'];
    $date = $row['date'];
    // include("template.php");

    // $sql = "SELECT * FROM photos where auto_id = $id LIMIT 1" ;
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute();
    // $result = $stmt->fetchAll(); // get result
    // foreach ($result as $key => $row)  {
    // $img = $row['name_photos'];
    include("baansvacatures.inc.php");
    }   
// }

?>

  </Div>

  <Div class="baanen">



  </Div>

  </div>






<?php 


    include('includes/footer.php')
?>
</body>
</html>