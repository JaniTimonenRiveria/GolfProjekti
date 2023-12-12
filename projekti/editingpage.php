<!DOCTYPE html>
<html>
<body>

<meta charset="UTF-8">
<title>Golf live | Syötä</title>

<h2>Tilastojen muuttaminen</h2>

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


<form action="editing.php" method="post">
Pelimuoto
<select name="gamemode"> 
    <option value="Tuplabogey">Tuplabogey</option> 
    <option value="Lyöntipeli">Lyöntipeli</option> 
    <option value="Reikäpeli">Reikäpeli</option> 
    <option value="Scratch">Scratch</option> 
</select>

Lyöntipaikka
<select name="tee"> 
    <option value="Keltainen">Keltainen</option> 
    <option value="Valkoinen">Valkoinen</option> 
    <option value="Punainen">Punainen</option> 

</select>

Päivämäärä
<input type="date" name="date" ><br><br>


Reikä
<input type="number" min="1"  max="18" name="holes" placeholder="-"><br>

Pituus<br>

PAR<br>

Lyönnit
<input type="number" min="1"  max="20" name="swings" placeholder="-"><br>

HCP<br>

Nettotulos<br><br>


<input type="submit" name="submit">Save</button>
</form>

</body>
</html> 