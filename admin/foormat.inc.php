<?php


echo '<div class="contentItem">';
echo '<form action="./vacturen.php" method="post">';
echo '<input hidden value="' . $id . '" name="id">';
echo '<input hidden value="' . $op_dicht . '" name="op_dicht">';
echo '<input hidden value="goed" name="goed">';
echo "$text";
echo '<br>';
echo '<input class="button" type="submit" value="beschikbaar en niet beschikbaar voor de bezoekers">';
echo '</div>';
echo '</form>';



echo '<div class="contentItem">';
echo '<form action="./informatiswijzigen.php" method="post">';
echo '<input hidden value="' . $id . '" name="id">';
// echo '<input hidden value="goed" name="goed">';
echo 'informatie wijzigen';
echo '<br>';
echo '<input class="button" type="submit" value="wijziging van het vacature">';
echo '</div>';
echo '</form>';


echo '<div class="contentItem">';
echo '<form action="./sollicitren.php" method="post">';
echo '<input hidden value="' . $id . '" name="id">';
echo '<input hidden value="goed" name="goed">';
echo "bekijk sollicitren formeluur ";
echo "= $aantal_soliesietanten";
echo '<br>';
echo '<input class="button" type="submit" value="details van de solisitanten">';
echo '</div>';
echo '</form>';