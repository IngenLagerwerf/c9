<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  <link rel="stylesheet" href="css/dank.css"/>
  <link rel="stylesheet" href="css/navbar.css"/>
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

if (isset(($_POST['id']))) {
    $id = $_POST['id'];
    include_once("connection.php"); 
    include_once("inc/names.php"); 
    include_once("inc/soliesietant.inc.php");
    }
  else{
    header("Location: vacatures.php");
  }









?>

<body>
  <div id="dankWord">
      Bedankt  voor uw sollicitatie!
     voor uw sollicitatie!
      We zullen er zo snel mogelijk
      naar kijken.
  </div>




<?php 

  include('includes/footer.php');
  
?>
</body>
</html>
