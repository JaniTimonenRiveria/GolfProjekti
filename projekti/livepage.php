<!DOCTYPE html>
<html>
<body>

<meta charset="UTF-8">
<title>Golf Live</title>
<meta http-equiv="refresh" content="10">

<h2>Kisan live-tilastoseuranta</h2>


<table border="0">
    <tr>
        <th>Lyönnit</th>
        <th>Reikä</th>
        <th>Pelimuoto</th>
        <th>Lyöntipaikka</th>
        <th>Päivämäärä</th>
    </tr>

<?php
session_start();
include ("connect.php");

$sql = "SELECT holes, gamemode, tee, date, swings FROM live";
    $result = $connect->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["swings"] . "</td><td>" . $row["holes"] . "</td><td>" . $row["gamemode"] . "</td><td>" . $row["tee"] . "</td><td>" . $row["date"] . "</td></tr>";
    }
} 

else {
    echo "<tr><td colspan='3'>Ei tuloksia</td></tr>";
}

$connect->close();

?>
</table>
</body>
</html> 