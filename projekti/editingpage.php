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
    header("Location: http://localhost/projekti/loginpage.php");
}
?>

<p> </p>
<form action="logout.php" method="post">
<button type="submit" name="submit">Logout</button>
</form><br><br>


<form action="editing.php" method="post">
Pelimuoto
<select name="gamemode" required> 
    <option value="" disabled selected hidden></option>
    <option value="Tuplabogey">Tuplabogey</option> 
    <option value="Lyöntipeli">Lyöntipeli</option> 
    <option value="Reikäpeli">Reikäpeli</option> 
    <option value="Scratch">Scratch</option> 
</select>

Lyöntipaikka
<select name="tee" required>
    <option value="" disabled selected hidden></option>
    <option value="Keltainen">Keltainen</option> 
    <option value="Valkoinen">Valkoinen</option> 
    <option value="Punainen">Punainen</option> 

</select>

Päivämäärä
<input type="date" name="date"><br><br>

Reikä
<input type="number" min="1"  max="18" name="hole" required placeholder=""><br>

Pituus<br>

PAR<br>

Lyönnit
<input type="number" min="1"  max="20" name="swings" required placeholder=""><br>

HCP<br>

Nettotulos<br><br>


<button type="submit" name="submit">Save</button>
</form>

</body>
</html> 