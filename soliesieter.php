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
    <link rel="stylesheet" href="css/soliesieter.css"/>
    
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


  <div class="vacatures">




  <?php
  if (isset(($_POST['id']))) {
    $id = $_POST['id'];


echo '<div class="soliesieter">';
echo '<form action="./dank.php" method="post">';
echo '<input hidden value="' . $id . '" name="id">';
echo '<input hidden value="goed" name="goed">';

echo "voornaam";
echo '<input type="text" value="" name="voornaam">';
echo "<br/>";
echo "achernaam";
echo '<input type="text" value="" name="achernaam">';
echo "<br/>";
echo "emaill";
echo '<input type="email" value="" name="emaill">';
echo "<br/>";
echo "telfoon nummer";
echo '<input type="text" value="" name="telfoon_nummer">';
echo "<br/>";
echo "diploma";
echo '<input type="file" value="" name="diploma">';
echo '<br>';
echo "cv";
echo '<input type="file" value="" name="cv">';
echo '<br>';
echo "motievatsie";
echo '<input type="text" value="" name="motievatsie">';
echo '<br>';

echo '<input class="button" type="submit" value="verstuuenr">';
echo '</div>';
echo '</form>';

}
else{
  header("Location: vacatures.php");
}
?>




  </div>






<?php 


    include('includes/footer.php')
?>
</body>
</html>