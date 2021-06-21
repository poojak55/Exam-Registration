<?php
session_start();
unset($_SESSION["usn"]);
unset($_SESSION["password"]);
header("Location:../home.php");
?>