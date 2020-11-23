<?php
if (isset($_POST['recover'])) {

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);
    if (!$con) {
        echo '<script>alert("Try again")</script>';
    } else {
        $First_Name = $_POST['recfirstname'];
        $Last_Name = $_POST['reclastname'];
        $Email = $_POST['recemail'];
        $Phone_number = $_POST['recphonenumber'];
        $Birthday = $_POST['recbithday'];
        $security = $_POST['recsecurityquestion'];
        $req = 'SELECT * FROM `user` WHERE First_Name=? AND Last_Name=?
     AND Email=? AND Phone_number=? AND Birthday=? AND `Security question`=?';
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("Try againe")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'ssssss', $First_Name, $Last_Name, $Email, $Phone_number, $Birthday, $security);
            if (!mysqli_stmt_execute($stmt)) {
                echo '<script>alert("Try againe 2")</script>';
            } else {
                $res = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($res)) {
                    $_SESSION['id'] = $row['Id'];
                    header('Location:../pages/profile.php');

                } else {
                    echo '<script>alert("Information inccorrect")</script>';
                }
            }
        }
    }
    echo mysqli_error($con);
    mysqli_close($con);
}
