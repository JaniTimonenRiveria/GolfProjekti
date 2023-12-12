<?php

session_start();
include ("connect.php");

$tee = mysqli_real_escape_string($connect, $_POST["tee"]);
$gamemode= mysqli_real_escape_string($connect, $_POST["gamemode"]);
$date = mysqli_real_escape_string($connect, $_POST["date"]);
$swings = mysqli_real_escape_string($connect, $_POST["swings"]);


$stmt = $connect->prepare("INSERT INTO live (tee, gamemode, date, swings) VALUES (?, ?, ?, ?)");
$stmt->bind_param("is", $tee, $gamemode, $date, $swings);
$stmt->execute();

echo "Tiedot tallennettu onnistuneesti";

$stmt->close();
$connect->close();




?>