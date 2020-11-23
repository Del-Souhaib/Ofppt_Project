<?php
session_start();
unset($_SESSION['admin']);
header('Location:Admin_login.php')
?>