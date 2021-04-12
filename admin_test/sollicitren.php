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
      <div style="background-color:#C2F98E; height:25px; margin-top:5%; padding:0;">
        <input type="text" style="float:left; width:70%;" id="patroon" name="patroon" placeholder="Zoek albums" />
        <input type="submit" style="float:none; width:10%; font-size: 1.2rem;" id="zoeken" name="zoeken" value="&#128270;" /> </br>
      </div>
    </form> 
  </div>

  <?php



if (isset(($_POST['id']))) {
    $id = $_POST['id'];
    include_once("connection.php"); 
    include_once("sollicitren.inc.php");
    }

else{
  header("Location: index.php");
}




 

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