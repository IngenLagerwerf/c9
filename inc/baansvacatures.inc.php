<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/vacatures.css">
    <title></title>
</head>
 -->

<?php
//werkt


echo '<div class="contentItem">';
echo '<form action="./vacatderipsen.php" method="post">';
echo '<input hidden value="' . $id . '" name="id">';
echo '<input hidden value="goed" name="goed">';
// echo "$id";
echo "$naam";
echo "<br/>";
echo "diploma nodig:";
echo "$diploma";
echo "<br/>";
echo "loon op jaarbasis:";
echo "$loon";
echo "<br/>";
echo "uuren per week:";
echo "$uuren";
echo '<br>';
echo '<input class="button" type="submit" value="Meer...">';
echo '</div>';
echo '</form>';

//werkt




//    $menu = <<<HTML
//    <form action="./showroom.php" method="post">
//    <div class="contentItem">
//      <div class="row">
//      <input hidden value="$id" name="id">
//      <div  class="menutitle" name="id">$naam</div>
//      </div>
//         <input class="button" type="submit" value="test">
//    </form>
// HTML;
//     echo $menu;

   
// $menu = <<<HTML
// <div class="contentItem">
//     <div class="row">
//         <div class="menutitle">$titel</div>
//         <div class="price">€$prijs</div>
//     </div>
//     <img src="$img">
//     <button >Kopen</button>
// </div>
// HTML;
// echo $menu;