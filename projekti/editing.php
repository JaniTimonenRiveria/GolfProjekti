<?php

session_start();
include ("connect.php");

$holes = $_POST["holes"];
$tee = $_POST["tee"];
$gamemode= $_POST["gamemode"];
$date = $_POST["date"];
$swings = $_POST["swings"];
$username = $_POST["username"];

$stmt = $connect->prepare("INSERT INTO live (tee, gamemode, date, swings, holes, username) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssiis", $tee, $gamemode, $date, $swings, $holes, $username);
$stmt->execute();

header("Location: http://localhost/projekti/livepage.php");

$stmt->close();
$connect->close();

?>