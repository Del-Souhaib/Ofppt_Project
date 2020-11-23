<?php
session_start();
$cartid = $_GET['cartid'];

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'school_project';
$con = mysqli_connect($server, $user, $password, $database);
$userid = $_SESSION['id'];
if (!$con) {
    echo '<script>alert("Try again")</script>';
    exit();
} else {
    $req = "DELETE FROM `carts` WHERE Id=? ";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $req)) {
        echo '<script>alert("try again")</script>';
    } else {
        mysqli_stmt_bind_param($stmt, 'i', $cartid);
        if (mysqli_stmt_execute($stmt)) {
            header('Location:..\mycarts.php');
        } else {
            echo '<script>alert("try again")</script>';

        }

    }
    mysqli_close($con);
}
