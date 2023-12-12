<?php

session_start();
include ("connect.php");

$hole = $_POST["hole"];
$tee = $_POST["tee"];
$gamemode= $_POST["gamemode"];
$date = $_POST["date"];
$swings = $_POST["swings"];
$username = ($_SESSION['username']);

if (isset($date) && !empty($date)) {
    $stmt = $connect->prepare("INSERT INTO live (tee, gamemode, date, swings, hole, username) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssiis", $tee, $gamemode, $date, $swings, $hole, $username);
} 

else {
    $stmt = $connect->prepare("INSERT INTO live (tee, gamemode, swings, hole, username) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiis", $tee, $gamemode, $swings, $hole, $username);
}

$stmt->execute();
    header("Location: http://localhost/projekti/livepage.php");

$stmt->close();
$connect->close();

?>