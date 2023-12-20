<?php

session_start();
include ("connect.php");

$hole = $_POST["hole"];
$tee = $_POST["tee"];
$gamemode= $_POST["gamemode"];
$date = $_POST["date"];
$swings = $_POST["swings"];
$username = ($_SESSION['username']);
$team = $_POST["team"];
$par = $_POST["par"];
$points = $_POST["points"];

if (isset($date) && !empty($date)) {
    $stmt = $connect->prepare("INSERT INTO live (tee, gamemode, date, swings, hole, username, team, points, par) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssissiii", $tee, $gamemode, $date, $swings, $hole, $username, $team, $points, $par);
} 

else {
    $stmt = $connect->prepare("INSERT INTO live (tee, gamemode, swings, hole, username, team, points, par) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssissiii", $tee, $gamemode, $swings, $hole, $username, $team, $points, $par);
}

$stmt->execute();
    header("Location: http://localhost/projekti/livepage.php");

$stmt->close();
$connect->close();

?>