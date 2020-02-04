<?php
session_start();
unset($_SESSION["fname"],$_SESSION["lname"],$_SESSION["email"],$_SESSION["password"]);  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
session_destroy();
header("location: Login.php");
?>
