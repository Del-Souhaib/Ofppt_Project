<?php
session_start();
if (isset($_SESSION['id'])) {

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);
    if (!$con) {
        echo '<script>alert("Try again")</script>';
    } else {
        $productid = mysqli_real_escape_string($con, $_GET['productid']);
        $userid = mysqli_real_escape_string($con, $_SESSION['id']);
        $req0 = "SELECT * FROM `carts` WHERE Product_id=? AND User_id=?";
        $stmt0 = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt0, $req0)) {
            echo '<script>alert("Try again 2")</script>';
        } else {
            mysqli_stmt_bind_param($stmt0, 'ii', $productid, $userid);
            if (!mysqli_stmt_execute($stmt0)) {
                echo '<script>alert("Try again 3")</script>';
            } else {
                $res = mysqli_stmt_get_result($stmt0);
                $row = mysqli_fetch_assoc($res);
                if (isset($row)) {
                    header('Location:..\mycarts.php');
                } else {
                    $req = "INSERT INTO `carts`(`Product_id`, `User_id`) VALUES (?,?)";
                    $stmt = mysqli_stmt_init($con);
                    if (!mysqli_stmt_prepare($stmt, $req)) {
                        echo '<script>alert("Try again 2")</script>';
                    } else {
                        mysqli_stmt_bind_param($stmt, 'ii', $productid, $userid);
                        if (!mysqli_stmt_execute($stmt)) {
                            echo '<script>alert("Try again 3")</script>';
                        } else {
                            header('Location:..\mycarts.php');
                        }
                    }
                }
            }
        }

    }
} else {
    header('Location:..\Login.php');

}
