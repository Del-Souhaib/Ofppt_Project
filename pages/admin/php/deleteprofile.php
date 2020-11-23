<?php
$server = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'school_project';
        $con = mysqli_connect($server, $user, $password, $database);
        if (!$con) {
            echo '<script>alert("Try again")</script>';
        } else {
            $admin = $_SESSION['admin'];
            $req = "DELETE FROM `admins` WHERE Id=?";
            $stmt = mysqli_stmt_init($con);
            if (!mysqli_stmt_prepare($stmt, $req)) {
                echo '<script>alert("Try again 2")</script>';
            } else {
                mysqli_stmt_bind_param($stmt, 'i', $admin);
                if (!mysqli_stmt_execute($stmt)) {
                    echo '<script>alert("Try again")</script>';
                } else {
                    unset($_SESSION['admin']);
                    header('Location:Admin_login.php');
                }
                mysqli_close($con);
            }
        }