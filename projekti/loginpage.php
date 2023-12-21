<!DOCTYPE html>
<html>
<body>


<meta charset="UTF-8">
<title>Tilastosäätö | Kirjaudu sisään</title>
<link rel="stylesheet" href="style_loginpage.css"/>


<div class="div">

<h2>Kirjaudu sisään</h2>

<?php
session_start();
include ("connect.php");
if (isset($_SESSION['username'])) {
header("Location: /projekti/editingpage.php");
}
?>


<form action="login.php" method="post">
<input type="text" name="username" required placeholder="Nimi"><br><br>
<input type="password" name="userpw" placeholder="Salasana">

<div class="bottomdiv">

<button type="submit" name="submit">Kirjaudu</button>
</form>

<form action="return.php" method="post">
<button type="submit" name="submit">Peruuta</button>
</form>

</div>

</div>

</body>
</html> 