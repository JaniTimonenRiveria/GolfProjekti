<!DOCTYPE html>
<html>
<body>


<meta charset="UTF-8">
<title>Golf live | Kirjautuminen</title>
<link rel="stylesheet" href="style_loginpage.css"/>


<div>
    <div class="div">
<h2>Kirjaudu sisään</h2>

<?php
session_start();
include ("connect.php");
if (isset($_SESSION['username'])) {
header("Location: http://localhost/projekti/editingpage.php");
}
?>

<form action="login.php" method="post">
<input type="text" name="username" placeholder="Username"><br><br>
<input type="password" name="userpw" placeholder="Password"><br><br>
<button type="submit" name="submit">Login</button>
</form><br>

<form action="return.php" method="post">
<button type="submit" name="submit">Return</button>
</form>
</div>

</body>
</html> 