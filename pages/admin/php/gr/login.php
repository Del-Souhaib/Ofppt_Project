<?php
if (isset($_POST['login'])) {

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);

    if (!$con) {
        echo '<script>alert("Try again")</script>';
        exit();
    } else {
        $name = mysqli_real_escape_string($con, $_POST['user']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        if (empty($name) || empty($password)) {
            header('Location:Admin_login.php?empty_information');
            exit();

        } else {

            $req = "SELECT * FROM `admins` Where Name=? ";
            $stmt = mysqli_stmt_init($con);
            if (!mysqli_stmt_prepare($stmt, $req)) {
                header('Location:Admin_login.php?error');
                exit();

            } else {
                mysqli_stmt_bind_param($stmt, 's', $name);
                mysqli_stmt_execute($stmt);
                $res = mysqli_stmt_get_result($stmt);
                if (!$row = mysqli_fetch_assoc($res)) {
                    header('Location:Admin_login.php?Login_Inccorect');
                    exit();
                } else {
                    echo $password2;
                    if (!password_verify($password, $row['Password'])) {
                        header('Location:Admin_login.php?Password_Incorrect');
                        exit();
                    } else {
                        session_start();
                        $_SESSION['admin'] = $row['Id'];
                        header('Location:../Profiles/profile.php');

                    }

                }
            }

        }
        mysqli_close($con);
    }
    /* $password2 = password_hash('Souhqib', PASSWORD_DEFAULT);

echo $password2;*/

}
