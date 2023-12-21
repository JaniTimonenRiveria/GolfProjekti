<!DOCTYPE html>
<html>
<body>


<meta charset="UTF-8">
<title>Golf-kisan tilastosäätö</title>
<link rel="stylesheet" href="style_editingpage.css"/>


<header class="header">
    <h1>Golf-kisan tilastosäätö</h1>
</header>


<header class="secheader">

<?php
session_start();
include ("connect.php");

if (isset($_SESSION['username'])) {
    echo "Kirjauduttu käyttäjällä: " . $_SESSION['username'];
}

else if (!isset($_SESSION['username'])) {
    header("Location: /projekti/loginpage.php");
}
?>

<form action="logout.php" method="post">
<button type="submit" name="submit">Kirjaudu ulos</button>
</form>

</header>


<div class="topdiv">

<form action="editing.php" method="post">

Pelimuoto:
<select name="gamemode" required> 
    <option value="" disabled selected hidden></option>
    <option value="Lyöntipeli">Lyöntipeli</option>
    <option value="Reikäpeli">Reikäpeli</option> 
    <option value="Scratch">Scratch</option> 
    <option value="Tuplabogey">Tuplabogey</option> 
</select>

Tiimi:
<select name="team" required> 
    <option value="" disabled selected hidden></option>
    <option value="Tiimitön">Tiimitön</option> 
    <option value="1">1</option> 
    <option value="2">2</option> 
    <option value="3">3</option> 
    <option value="4">4</option> 
</select>

Lyöntipaikka:
<select name="tee" required>
    <option value="" disabled selected hidden></option>
    <option value="Keltainen">Keltainen</option> 
    <option value="Punainen">Punainen</option> 
    <option value="Valkoinen">Valkoinen</option> 
</select>

Päivämäärä:
<input type="date" name="date">

</div>


<header class="secheader">
    Syötä tiedot
</header>


<div class="centerdiv">

<label>Reikä:</label>
<select name="hole" required>
    <option value="" disabled selected hidden></option>
    <option value="E">E</option>
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
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13">13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16">16</option>
    <option value="17">17</option>
    <option value="F">F</option>
</select><br><br>

<label>Lyönnit:</label>
<input type="number" min="1"  max="100" name="swings" required><br><br>

<label>PAR:</label>
<input type="number" min="-75"  max="75" name="par" required><br><br>

<label>Tulos:</label>
<input type="number" min="-75"  max="75" name="points" required>

</div>


<header class="secheader">
    Hyväksy muutokset
</header>


<div class="bottomdiv">

<button type="submit" name="submit">Tallenna</button>
</form>

<form action="return.php" method="post">
<button type="submit" name="submit">Peruuta</button>
</form>

</div>

</body>
</html> 