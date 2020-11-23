<?php
if (isset($_POST['save'])) {
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);
    if (!$con) {
        echo '<script>alert("Try again")</script>';
    } else {
        $id = $_SESSION['id'];
        $req = "SELECT * FROM user where Id=?";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("Try again 2")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            if (!mysqli_stmt_execute($stmt)) {
                echo '<script>alert("Try again 3")</script>';
            } else {
                $res = mysqli_stmt_get_result($stmt);
                $row = mysqli_fetch_assoc($res);
            }
        }

        $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
        $sexe = mysqli_real_escape_string($con, $_POST['sexe']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
        $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
        $password1 = mysqli_real_escape_string($con, $_POST['password1']);
        $password2 = mysqli_real_escape_string($con, $_POST['password2']);
        $security = mysqli_real_escape_string($con, $_POST['security']);

        $imgname = $_FILES['image']['name'];
        $imgtype = $_FILES['image']['type'];
        $imgerror = $_FILES['image']['error'];
        $imgtmp_name = $_FILES['image']['tmp_name'];
        $imgsize = $_FILES['image']['size'];
        $allowed = array('png', 'svg', 'jpg', 'jpeg');
        $explode = explode('.', $imgname);
        $imgverify = strtolower(end($explode));

        $imgname = $firstname . $lastname . '.' . $imgverify;

        if ($imgerror == 0) {
            if (empty($imgname) || empty($imgsize)) {
                echo '<script>alert("Uplaod a picture")</script>';

            } else {

                if (!in_array($imgverify, $allowed)) {
                    echo '<script>alert("Select image with png,svg,jpg or jpeg format")</script>';

                } else {

                    if ($imgsize > 6000000) {
                        echo '<script>alert("Image is too big")</script>';

                    } else {

                        unlink($_SERVER['DOCUMENT_ROOT'] . '\Work\school project\images\community\Profiles\\' . $row['Picture']);
                        move_uploaded_file($imgtmp_name, $_SERVER['DOCUMENT_ROOT'] . '\Work\school project\images\community\Profiles\\' . $imgname);
                    }
                }
            }
        }

        $req = "UPDATE `user` SET `First_Name`=?,`Last_Name`=?,`Picture`=?,`sexe`=?,`Email`=?,`Phone_number`=?,`Birthday`=?,`Password`=?,`Security question`=? WHERE ID=?";
        if ($password1 != $password2) {
            echo '<script>alert("Veriify your password")</script>';
        } else {
            $secure = password_hash($password1, PASSWORD_DEFAULT);
            $stmt = mysqli_stmt_init($con);
            if (!mysqli_stmt_prepare($stmt, $req)) {
                echo '<script>alert("Try again 2")</script>';
            } else {
                mysqli_stmt_bind_param($stmt, 'sssssssssi', $firstname, $lastname, $imgname, $sexe, $email,
                    $phonenumber, $birthday, $secure, $security, $id);
                if (!mysqli_stmt_execute($stmt)) {
                    echo '<script>alert("Try again 3")</script>';
                } else {
                    echo '<script>alert("Profile updated")</script>';
                }
            }
        }
        mysqli_close($con);

    }
}
