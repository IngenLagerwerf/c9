<?php
$i = 0;
echo '<div class="mensen">';
echo '<form action="" method="post">';
echo '<input hidden value="' . $id . '" name="id">';
echo '<input hidden value="delyt" name="delyt">';
// echo "<a href='../upload/$id/$img' download='cv'>";
// echo '<br/>';
// echo "$id";
// echo '<br/>';
echo "$voornaam";
echo '<br/>';
echo "$achernaam";
echo '<br/>';
echo "$emaill";
echo '<br/>';
echo "$telfoon_nummer";
echo '<br/>';

$sql = "SELECT * FROM fils where werkzoekers_id = $id LIMIT 2" ;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(); // get result
foreach ($result as $key => $row)  {
$img = $row['diploma'];


echo "<a href='../upload/$id/$img' download='diploma' >";

if($i == 0){
    $test = "file/1";
}

if($i == 1){
    $test = "file/2";
}
$i ++ ; 
echo "$test";
echo "<a>";
echo '<br/>';
}   
echo "$motievatsie";
echo '<br/>';
echo '<input class="button" type="submit" value="delet">';
echo '</div>';
echo '</form>';