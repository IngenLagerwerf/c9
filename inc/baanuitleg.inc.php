<?php
//werkt


echo '<div class="baandescripsen">';
echo '<form action="./soliesieter.php" method="post">';
echo '<input hidden value="' . $id . '" name="id">';
echo '<input hidden value="goed" name="goed">';
echo "$id";
echo "$naam";
echo "<br/>";
echo "$uitleg";
echo "<br/>";
echo "$diploma";
echo "<br/>";
echo "$loon";
echo "<br/>";
echo "$uuren";
echo '<br>';
echo '<input class="button" type="submit" value="">';
echo '</div>';
echo '</form>';