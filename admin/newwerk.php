<?php
session_start();
$test = $_SESSION['true'];
if($test == 0){
header("Location: inlog.php");
}
?>
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

<?php
include_once("fomeleer.php");   



if (isset(($_POST['goed']))) {
    $naam = $_POST['naam'];
    $uitleg = $_POST['uitleg'];
    $diploma = $_POST['diploma'];
    $loon = $_POST['loon'];
    $uuren = $_POST['uuren'];
    $op_dicht = $_POST['op_dicht'];
    include_once("newwerk.inc.php");
    }



?>


  </Div>

  </div>






<?php 


    include('includes/footer.php')
?>
</body>
</html>