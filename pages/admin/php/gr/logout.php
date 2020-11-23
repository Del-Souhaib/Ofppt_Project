<?php
session_start();
if (isset($_SESSION['admin'])) {

    unset($_SESSION['admin']);
    header('Location:..\gr\Admin_login.php');

} else {
    header('Location:..\gr\Admin_login.php');
}
