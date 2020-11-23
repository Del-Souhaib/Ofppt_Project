<?php
if (isset($_POST['delete'])) {
    $id = $_SESSION['id'];
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);
    if (!$con) {
        echo '<script>alert("Try again")</script>';
    } else {
        //delete reacts
        $req = "DELETE FROM `love_react` WHERE Id_Users=?";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("Try again 2")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            if (!mysqli_stmt_execute($stmt)) {
                echo '<script>alert("' . mysqli_error($con) . '")</script>';
            }
        }
        //delete comments
        $req = "DELETE FROM `comment` WHERE user_Id=? ";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("try again")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            if (!mysqli_stmt_execute($stmt)) {
                echo '<script>alert("try again 3")</script>';
            } else {

            }
        }
        //delete post react

        $req = "SELECT  * FROM post  where Id_User=? ";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("try again")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            if (!mysqli_stmt_execute($stmt)) {
                echo '<script>alert("try again 3")</script>';
            } else {
                $res = mysqli_stmt_get_result($stmt);
                while ($row = mysqli_fetch_assoc($res)) {
                    $req2 = "delete FROM love_react WHERE Id_Post=? ";
                    $stmt2 = mysqli_stmt_init($con);
                    mysqli_stmt_prepare($stmt2, $req2);
                    mysqli_stmt_bind_param($stmt2, 'i', $row['Id']);
                    mysqli_stmt_execute($stmt2);
                }

            }
        }
        //delete post
        $req = "DELETE FROM `post` WHERE Id_User=?";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("Try again 2")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            if (!mysqli_stmt_execute($stmt)) {
                echo '<script>alert("' . mysqli_error($con) . '")</script>';
            }
        }
//delete carts
        $req = "DELETE FROM `carts` WHERE User_id=? ";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("try again")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            if (!mysqli_stmt_execute($stmt)) {
                echo '<script>alert("try again 3")</script>';
            }
        }
//delete orders
        $req = "DELETE FROM `order` WHERE Id_User=? ";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("try again")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            if (!mysqli_stmt_execute($stmt)) {
                echo '<script>alert("try again 3")</script>';
            }
        }
        //delete from admin
        $req = "DELETE FROM `admins` WHERE Id=?";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("Try again 2")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            if (!mysqli_stmt_execute($stmt)) {
                echo '<script>alert("' . mysqli_error($con) . '")</script>';
            }
        }
        //delete user
        $req = "DELETE FROM `user` WHERE Id=? ";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("Try again 2")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            if (!mysqli_stmt_execute($stmt)) {
                echo '<script>alert("' . mysqli_error($con) . '")</script>';
            } else {
                echo '<script>alert("Your account has deleted")</script>';
                session_destroy();
                header('Location:Login.php');
            }
        }

    }

}
