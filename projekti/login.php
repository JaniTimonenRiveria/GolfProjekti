<?php

session_start();
include ("connect.php");


$username = mysqli_real_escape_string($connect, $_POST["username"]);
$userpw = mysqli_real_escape_string($connect, $_POST["userpw"]);


$query = mysqli_query($connect, "SELECT * FROM users WHERE username ='$username' AND userpw = '$userpw'");

if (mysqli_num_rows($query) == 0) {
    header("Location: http://localhost/projekti/loginpage.php");
} 

if(mysqli_num_rows($query) !== 0) {
    header("Location: http://localhost/projekti/editingpage.php");

$info = mysqli_fetch_array($query) or die(mysqli_error());
            
$_SESSION["username"] = $info['username'];
$_SESSION["userpw"] = $info['userpw'];
$_SESSION['LOGGEDIN'] = 1;
}

?>