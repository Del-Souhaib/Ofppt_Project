<?php
session_start();
if (isset($_SESSION['id'])) {
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);

    $user5 = mysqli_real_escape_string($con, $_SESSION['id']);
    $postid = mysqli_real_escape_string($con, $_GET['postid']);
    $text = mysqli_real_escape_string($con, $_GET['text']);
    $date = date('yy-m-d-h-i-s');
    $req = "INSERT INTO `comment`( `user_id`, `post_id`, `comment`, `Date`) VALUES (?,?,?,?)";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $req)) {
        echo 'error 1';
    } else {
        mysqli_stmt_prepare($stmt, $req);
        mysqli_stmt_bind_param($stmt, 'iiss', $user5, $postid, $text, $date);
        mysqli_execute($stmt);
    }

// header('Location:../community.php');
    echo mysqli_error($con);
} else {
    header('Location:Login.php');
}
