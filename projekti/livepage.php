<!DOCTYPE html>
<html>
<body>


<meta charset="UTF-8">
<title>Golf-kisan tilastoseuranta</title>
<meta http-equiv="refresh" content="10">
<link rel="stylesheet" href="style_livepage.css"/>



<header class="header">
    <h1>Golf-kisan tilastoseuranta</h1>
</header>


<header class="secheader">
    Lyöntipeli
</header>


<table>
    <tr>
        <th>Tiimi</th>
        <th>Nimi</th>
        <th>Lyöntipaikka</th>
        <th>Reikä</th>
        <th>Lyönnit</th>
        <th>PAR</th>
        <th>Tulos</th>
        <th>Päivämäärä</th>
        <th>Pelimuoto</th>
    </tr>

<?php
include ("connect.php");

$sql = "SELECT team, username, tee, hole, swings, par, points, date, gamemode FROM live WHERE gamemode='Lyöntipeli' ORDER BY points DESC";
    $result = $connect->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["team"] . "</td><td>" . $row["username"] . "</td><td>" . $row["tee"] . "</td><td>" . $row["hole"] . "</td><td>"
             . $row["swings"] . "</td><td>" . $row["par"] . "</td><td>" . $row["points"] . "</td><td>" . $row["date"] . "</td><td>" . $row["gamemode"];
    }
}

else {
    echo "<tr><td colspan='3'>Tyhjä</td></tr>";
}

$connect->close();
?>

</table>

<header class="secheader">
    Reikäpeli
</header>

<table>
    <tr>
        <th>Tiimi</th>
        <th>Nimi</th>
        <th>Lyöntipaikka</th>
        <th>Reikä</th>
        <th>Lyönnit</th>
        <th>PAR</th>
        <th>Tulos</th>
        <th>Päivämäärä</th>
        <th>Pelimuoto</th>
    </tr>

<?php
include ("connect.php");

$sql = "SELECT team, username, tee, hole, swings, par, points, date, gamemode FROM live WHERE gamemode='Reikäpeli' ORDER BY points DESC";
    $result = $connect->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["team"] . "</td><td>" . $row["username"] . "</td><td>" . $row["tee"] . "</td><td>" . $row["hole"] . "</td><td>"
             . $row["swings"] . "</td><td>" . $row["par"] . "</td><td>" . $row["points"] . "</td><td>" . $row["date"] . "</td><td>" . $row["gamemode"];
    }
}

else {
    echo "<tr><td colspan='3'>Tyhjä</td></tr>";
}

$connect->close();
?>

</table>

<header class="secheader">
    Scratch
</header>

<table>
    <tr>
        <th>Tiimi</th>
        <th>Nimi</th>
        <th>Lyöntipaikka</th>
        <th>Reikä</th>
        <th>Lyönnit</th>
        <th>PAR</th>
        <th>Tulos</th>
        <th>Päivämäärä</th>
        <th>Pelimuoto</th>
    </tr>

<?php
include ("connect.php");

$sql = "SELECT team, username, tee, hole, swings, par, points, date, gamemode FROM live WHERE gamemode='Scratch' ORDER BY points DESC";
    $result = $connect->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["team"] . "</td><td>" . $row["username"] . "</td><td>" . $row["tee"] . "</td><td>" . $row["hole"] . "</td><td>"
             . $row["swings"] . "</td><td>" . $row["par"] . "</td><td>" . $row["points"] . "</td><td>" . $row["date"] . "</td><td>" . $row["gamemode"];
    }
}

else {
    echo "<tr><td colspan='3'>Tyhjä</td></tr>";
}

$connect->close();
?>

</table>

<header class="secheader">
    Tuplabogey
</header>

<table>
    <tr>
        <th>Tiimi</th>
        <th>Nimi</th>
        <th>Lyöntipaikka</th>
        <th>Reikä</th>
        <th>Lyönnit</th>
        <th>PAR</th>
        <th>Tulos</th>
        <th>Päivämäärä</th>
        <th>Pelimuoto</th>
    </tr>

<?php
include ("connect.php");

$sql = "SELECT team, username, tee, hole, swings, par, points, date, gamemode FROM live WHERE gamemode='Tuplabogey' ORDER BY points DESC";
    $result = $connect->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["team"] . "</td><td>" . $row["username"] . "</td><td>" . $row["tee"] . "</td><td>" . $row["hole"] . "</td><td>"
             . $row["swings"] . "</td><td>" . $row["par"] . "</td><td>" . $row["points"] . "</td><td>" . $row["date"] . "</td><td>" . $row["gamemode"];
    }
}

else {
    echo "<tr><td colspan='3'>Tyhjä</td></tr>";
}

$connect->close();
?>

</table>

<header class="secheader">
    Muokkaa tietoa
</header>


<div class="bottomdiv">

<form action="edit.php" method="post">
<button type="submit" name="submit">Kirjaudu / Muokkaa</button>
</form>

</div>

</body>
</html> 