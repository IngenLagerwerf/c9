<?php

$sql = "DELETE FROM werkzoekers WHERE id='$id'";
$stmt = $pdo->prepare($sql);
$stmt->execute();

