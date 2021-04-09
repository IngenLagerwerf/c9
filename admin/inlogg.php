<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css" />
     
</head> -->






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
  <link rel="stylesheet" href="../css/navbar.css"/>
  <link rel="stylesheet" href="../css/login.css" />
    
  <title>buurtzorg</title>

</head>



<body>
  <!-- #region Navbar-->
  <div id="navbar">
    <script>
      $("#navbar").load("../includes/navbar.php");
    </script>
  </div>
  <!-- #endregion -->
<body>
  <div class="box"></div>
    
    <div class="content">
        <form name="inloggen" method="POST" enctype="multipart/form-data" action="inlog.php">
    
            <p id="page_titel">Inloggen</p>
            <input required type="email" name="e-mail" placeholder="bij@voorbeeld.com" /><br />
            <input required type="password" name="wachtwoord" placeholder="wachtwoord" /><br />
    
            <div class="icon_container">
                <input type="submit" class="icon" id="submit" name="submit" value="Log in" />
            </div>
    
            
    
        </form>
        </div>

    
        <?php 

include('../includes/footer.php');

?>
</body>
</html>

