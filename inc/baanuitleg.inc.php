<?php
//werkt


echo '<div class="baandescripsen">';
echo '<form action="./soliesieter.php" method="post">';
echo '<input hidden value="' . $id . '" name="id">';
echo '<input hidden value="goed" name="goed">';
// echo "$id";
echo "<h1>";
echo "$naam";
echo "</h1>";
// echo "<a href='./test.txt' download='test'>";
// echo "<br/>";
echo "$uitleg";
echo "<br/>";
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
echo '<input class="button" type="submit" value="Solliciteer">';
echo '</div>';
echo '</form>';


