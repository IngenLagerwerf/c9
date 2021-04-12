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







  <Div class="baanen">



    <?PHP


      
if (isset(($_POST['goed']))) {
  $id = $_POST['id'];
  $op_dicht = $_POST['op_dicht'];
  include_once("connection.php"); 
  include_once("vacatderipsen.inc.php");

  if ($op_dicht == 1) {
    $op_dicht = 0;
include("verrander.inc.php");
}

elseif($op_dicht == 0){
  $op_dicht = 1;
include("verrander.inc.php");
}
include_once("vacatderipsen.inc.php");


  }

  if (isset(($_POST['id']))) {
    $id = $_POST['id'];
    include_once("connection.php"); 
    include_once("vacatderipsen.inc.php");
    }

else{
  header("Location: index.php");
}

  ?>
  </Div>

  </div>






<?php 


    include('includes/footer.php')
?>
</body>
</html>