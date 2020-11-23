<?php
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'school_project';
$con = mysqli_connect($server, $user, $password, $database);

$id = $_GET['productid'];
if (!$con) {
    echo '<script>alert("Try again")</script>';
    exit();
} else {

    $req = "DELETE FROM `order` WHERE id=? ";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $req)) {
        echo '<script>alert("try again")</script>';
    } else {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        if (!mysqli_stmt_execute($stmt)) {
            echo '<script>alert("try again 3")</script>';
        } else {
            $req = "DELETE FROM `hot_sells`  WHERE id=? ";
            $stmt = mysqli_stmt_init($con);
            if (!mysqli_stmt_prepare($stmt, $req)) {
                echo '<script>alert("try again")</script>';
            } else {
                mysqli_stmt_bind_param($stmt, 'i', $id);
                if (!mysqli_stmt_execute($stmt)) {
                    echo '<script>alert("try again 3")</script>';
                } else {
                    $req = "DELETE FROM `product` WHERE Id=? ";
                    $stmt = mysqli_stmt_init($con);
                    if (!mysqli_stmt_prepare($stmt, $req)) {
                        echo '<script>alert("try again")</script>';
                    } else {
                        mysqli_stmt_bind_param($stmt, 'i', $id);
                        if (!mysqli_stmt_execute($stmt)) {
                            echo '<script>alert("try again 3")</script>';
                        } else {
                            echo '<script>alert("product deleted")</script>';
                        }
                    }
                }
            }

        }
    }
    echo mysqli_error($con);
    mysqli_close($con);
}
