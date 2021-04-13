<?php


echo '<div class="informatiswijzigen">';
// echo '<div class="invulIncPhp-formulier>"';
echo '<form action="" method="post">';
echo '<input hidden value="' . $id . '" name="id">';
echo '<input hidden value="goed" name="goed">';
echo 'informatie wijzigen';
echo '<br/>';
echo "naam";
echo '<input value="'.$naam.'" name="naam">';
echo '<br/>';
echo "uitleg";
echo '<input value="'.$uitleg.'" name="uitleg">';
echo '<br/>';
echo "diploma";
echo '<input value="'.$diploma.'" name="diploma">';
echo '<br/>';
echo "loon";
echo '<input value="'.$loon.'" name="loon">';
echo '<br/>';
echo "uuren";
echo '<input value="'.$uuren.'" name="uuren">';
echo '<br/>';
echo '<input class="button" type="submit" value="wijziging uitvoeren">';
echo '</div>';
echo '</div>';
echo '</form>';