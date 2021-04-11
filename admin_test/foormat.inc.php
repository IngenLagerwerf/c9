<?php


echo '<div class="contentItem">';
echo '<form action="./vacturen.php" method="post">';
echo '<input hidden value="' . $id . '" name="id">';
echo '<input hidden value="goed" name="goed">';
echo "$text";
echo '<br>';
echo '<input class="button" type="submit" value="">';
echo '</div>';
echo '</form>';



echo '<div class="contentItem">';
echo '<form action="./vacturen.php" method="post">';
echo '<input hidden value="' . $id . '" name="id">';
echo '<input hidden value="goed" name="goed">';
echo 'informatis wijzigen';
echo '<br>';
echo '<input class="button" type="submit" value="">';
echo '</div>';
echo '</form>';


echo '<div class="contentItem">';
echo '<form action="./vacturen.php" method="post">';
echo '<input hidden value="' . $id . '" name="id">';
echo '<input hidden value="goed" name="goed">';
echo "bekijk sollicitren formeluur";
echo "$aantal_soliesietanten";
echo '<br>';
echo '<input class="button" type="submit" value="">';
echo '</div>';
echo '</form>';