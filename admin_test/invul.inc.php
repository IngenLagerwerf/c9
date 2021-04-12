<?php


echo '<div class="contentItem">';
echo '<form action="" method="post">';
echo '<input hidden value="' . $id . '" name="id">';
echo '<input hidden value="goed" name="goed">';
echo 'informatis wijzigen';
echo '<br/>';
echo '<input value="'.$naam.'" name="naam">';
echo '<br/>';
echo '<input value="'.$uitleg.'" name="uitleg">';
echo '<br/>';
echo '<input value="'.$diploma.'" name="diploma">';
echo '<br/>';
echo '<input value="'.$loon.'" name="loon">';
echo '<br/>';
echo '<input value="'.$uuren.'" name="uuren">';
echo '<br/>';
echo '<input class="button" type="submit" value="">';
echo '</div>';
echo '</form>';