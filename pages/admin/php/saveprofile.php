<?php
if (isset($_POST['saveprofile'])) {
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);
    if (!$con) {
        echo '<script>alert("Try again")</script>';
    } else {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password1 = mysqli_real_escape_string($con, $_POST['password1']);
        $password2 = mysqli_real_escape_string($con, $_POST['password2']);
        $admin = $_SESSION['admin'];
        if (empty($name) || empty($email) || empty($password1) || empty($password2)) {
            echo '<script>alert("Write your information")</script>';

        } else {
            if ($password1 != $password2) {
                echo '<script>alert("Valid the password")</script>';
            } else {

                $req = "UPDATE `admins` SET `Name`=?,`Email`=?,`Password`=?  WHERE Id=?";
                $stmt = mysqli_stmt_init($con);
                if (!mysqli_stmt_prepare($stmt, $req)) {
                    echo '<script>alert("Try again 2")</script>';
                } else {
                    $passwordsecure = password_hash($password1, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, 'sssi', $name, $email, $passwordsecure, $admin);
                    if (!mysqli_stmt_execute($stmt)) {
                        echo '<script>alert("Try again")</script>';
                    }
                    mysqli_close($con);

                }
            }
        }

    }
}
