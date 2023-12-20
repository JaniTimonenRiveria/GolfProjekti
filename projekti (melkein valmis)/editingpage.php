<!DOCTYPE html>
<html>
<body>


<meta charset="UTF-8">
<title>Golf live | Syötä tiedot</title>
<link rel="stylesheet" href="style_editingpage.css"/>


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

Tiimi
<input type="number" max="10" name="team" placeholder="Tiimitön">

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
<select name="hole" required>
    <option value="" disabled selected hidden></option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
    <option value="7">7</option>
    <option value="8">8</option>
    <option value="9">9</option>
    <option value="10">10</option>
    <option value="F">F</option>
</select><br><br>

Lyönnit
<input type="number" min="1"  max="100" name="swings" required placeholder=""><br><br>

PAR
<input type="number" min="-75"  max="75" name="par" required placeholder=""><br><br>

Tulos
<input type="number" min="-75"  max="75" name="points" required placeholder=""><br><br>


<button type="submit" name="submit">Save</button>
</form><br>

<form action="return.php" method="post">
<button type="submit" name="submit">Return</button>
</form>

</body>
</html> 