<!DOCTYPE html>
<html>
<body>

<meta charset="UTF-8">
<title>Golf live | Kirjaudu</title>

<h2>Kirjaudu</h2>

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
</form>

</body>
</html> 