<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/6488e6347e.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
  <script src="https://code.jquery.com/jquery-latest.min.js"></script>

  <link rel="stylesheet" href="css/navbar.css"/>
  <link rel="stylesheet" href="css/contact.css"/>
    <title>Document</title>

  <link rel="stylesheet" href="css/contact.css"/>
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
<div id="Contact header">

  <div id="contact-formulier">

    <h1>Contact</h1>
    <input type="text" placeholder="Naam">
    <br />
    <input type="email" placeholder="Email-adres">
    <br />
    <textarea>
    </textarea>
    <br />
    <input type="submit" name="" value="verzenden"/>
</div>

  </div>
<?php 


    include('includes/footer.php')
?>
<div class="google_maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2510.6917037548133!2d5.847323651485705!3d51.00336895515002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0c790567264ad%3A0xc9edb91cf5061174!2sVISTA%20college!5e0!3m2!1snl!2snl!4v1614439351864!5m2!1snl!2snl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
<?php 

  include('includes/footer.php');
  

?>
</body>
</html>

