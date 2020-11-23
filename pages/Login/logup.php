<?php
if (isset($_POST['signup'])) {
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);
    if (!$con) {
        echo '<script>alert("Try again")</script>';
    } else {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $Sexe = $_POST['sexe'];
        $Email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];

        $Birthday = $_POST['bithday'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];
        $securitycode = $_POST['securityquestion'];

        $imgname = $_FILES['picture']['name'];
        $imgtype = $_FILES['picture']['type'];
        $imgerror = $_FILES['picture']['error'];
        $imgtmp_name = $_FILES['picture']['tmp_name'];
        $imgsize = $_FILES['picture']['size'];
        $allowed = array('png', 'svg', 'jpg', 'jpeg');
        $explode = explode('.', $imgname);
        $imgverify = strtolower(end($explode));

        $req0 = "SELECT * FROM `user` WHERE Email=?";
        $stmt0 = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt0, $req0)) {
            echo '<script>alert("Try again 2")</script>';
        } else {
            mysqli_stmt_bind_param($stmt0, 's', $Email);
            if (mysqli_stmt_execute($stmt0)) {
                if ($res0 = mysqli_stmt_get_result($stmt0)) {
                    if ($row0 = mysqli_fetch_assoc($res0)) {
                        echo '<script>alert("This email already used")</script>';
                    } else {
                        if ($password1 != $password2) {
                            echo '<script>alert("Password inccorect")</script>';
                        } else {
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

                                            $imgname = $firstname . $lastname . '.' . $imgverify;
                                            move_uploaded_file($imgtmp_name, $_SERVER['DOCUMENT_ROOT'] . '\Work\school project\images\community\Profiles\\' . $imgname);
                                            $password3 = password_hash($password1, PASSWORD_DEFAULT);
                                            $req = "INSERT INTO `user`(`First_Name`, `Last_Name`, `Picture`, `sexe`, `Email`,
                                             `Phone_number`, `Birthday`, `Password`, `Security question`) VALUES  (?,?,?,?,?,?,?,?,?)";
                                            $stmt = mysqli_stmt_init($con);
                                            if (!mysqli_stmt_prepare($stmt, $req)) {
                                                echo '<script>alert("Try again 2")</script>';
                                            } else {
                                                mysqli_stmt_bind_param($stmt, 'sssssssss', $firstname, $lastname, $imgname, $Sexe, $Email, $phonenumber, $Birthday, $password3, $securitycode);
                                                if (mysqli_stmt_execute($stmt)) {
                                                    echo '<script>alert("You are part of our community now !")</script>';
                                                } else {
                                                    echo '<script>alert("Try again 3")</script>';
                                                }
                                            }

                                        }

                                    }
                                }

                            } else {
                                echo '<script>alert("Upload your picture")</script>';

                            }
                        }
                    }

                } else {
                    echo '<script>alert("Try again 3")</script>';
                }
            } else {
                echo '<script>alert("Try again 4")</script>';
            }
        }

    }

    mysqli_close($con);

}
