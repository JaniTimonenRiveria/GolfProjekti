<?php

session_start();
include("connect.php");

/* if($_SESSION['LOGGEDIN'] == 1) {} */

session_unset();
session_destroy();
header("Location: /projekti/loginpage.php");

?>