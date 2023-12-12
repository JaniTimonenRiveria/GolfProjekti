<!DOCTYPE html>
<html>
<body>

<meta charset="UTF-8">
<title>Golf live | Syötä</title>

<h2>Tilastojen muuttaminen</h2>

<form action="editing.php" method="post"></form>

<?php
session_start();
include ("connect.php");

if (isset($_SESSION['username'])) {
    echo "Käyttäjä: " . $_SESSION['username'] . "\n";
}

else if (!isset($_SESSION['username'])) {
    header("Location: http://localhost/projekti/loginpage.html");
}
?>

<p> </p>
<form action="logout.php" method="post">
<button type="submit" name="submit">Logout</button>
</form><br><br>


Pelimuoto
<select name="gamemode"> 
    <option value="gamemode1">Tuplabogey</option> 
    <option value="gamemode2">Lyöntipeli</option> 
    <option value="gamemode3">Reikäpeli</option> 
    <option value="gamemode4">Scratch</option> 
</select>

Lyöntipaikka
<select name="tee"> 
    <option value="tee1">Keltainen</option> 
    <option value="tee2">Valkoinen</option> 
    <option value="tee3">Punainen</option> 

</select>

Päivämäärä
<input type="date" name="date" placeholder="date"><br><br>


Reikä<br>

Pituus<br>

PAR<br>

Lyönnit
<input type="number" min="1"  max="20" name="swings" placeholder="-"><br>

HCP<br>

Nettotulos<br><br>


<button type="submit" name="submit">Save</button>


</body>
</html> 