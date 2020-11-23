<?php
///////add new post
if (isset($_POST['post'])) {

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);
    if (!$con) {
        echo '<script>alert("Try again")</script>';
    } else {
        $user = mysqli_real_escape_string($con, $_SESSION['id']);
        $post = mysqli_real_escape_string($con, $_POST['posttext']);
        //  $file = mysqli_real_escape_string($con, $_POST['file']);
        $date2 = mysqli_real_escape_string($con, date("Y-m-d H:i:s"));
        $imgname = $_FILES['file']['name'];
        $imgtype = $_FILES['file']['type'];
        $imgsize = $_FILES['file']['size'];
        $imgurl = $_FILES['file']['tmp_name'];
        $count = count($imgname);
        $imgerrors = $_FILES['file']['error'];

        if ((empty($post)) && (empty($imgname[0])) && (empty($imgsize[0]))) {
            echo '<script>alert("Write something")</script>';
        } else if ((empty($imgname[0])) && (empty($imgsize[0]))) {
            $req = "INSERT INTO `post`(`Id_User`,`Text`, `File`, `Date`) VALUES (?,?,?,?)";
            $stmt = mysqli_stmt_init($con);
            if (!mysqli_stmt_prepare($stmt, $req)) {
                echo '<script>alert("Try againe")</script>';
            } else {
                $file = null;
                mysqli_stmt_bind_param($stmt, 'isss', $user, $post, $file, $date2);
                if (!mysqli_execute($stmt)) {
                    echo '<script>alert("Try againe 2")</script>';
                } else {
                    echo '<script>alert("Post added")</script>';

                }
            }
        } else {
            $check = 1;
            $file = '';
            $typecheck = array('jpg', 'png', 'jpeg', 'svg');
            for ($i = 0; $i < $count; $i++) {
                $explode[$i] = explode('.', $imgname[$i]);
                $imgtype[$i] = strtolower(end($explode[$i]));
                if (!in_array($imgtype[$i], $typecheck)) {
                    echo '<script>alert("We dont support this format")</script>';
                    $check = 0;
                }
                if ($imgsize[$i] > 1000009) {
                    echo '<script>alert("Size is too big")</script>';
                    $check = 0;
                }
                $imgname[$i] = $user . rand(1000, 1000000) . '.' . $imgtype[$i];
                $file = $file . $imgname[$i] . '|';
            }
            if ($check == 1) {
                $req = "INSERT INTO `post`(`Id_User`,`Text`, `File`, `Date`) VALUES (?,?,?,?)";
                $stmt = mysqli_stmt_init($con);
                if (!mysqli_stmt_prepare($stmt, $req)) {
                    echo '<script>alert("Try againe")</script>';
                } else {

                    mysqli_stmt_bind_param($stmt, 'isss', $user, $post, $file, $date2);
                    if (!mysqli_execute($stmt)) {
                        echo '<script>alert("Try againe 2")</script>';
                    }
                    ///select image
                    $req = "SELECT Id FROM `post` WHERE Id_User=? ORDER BY id DESC  LIMIT 1";
                    $stmt = mysqli_stmt_init($con);
                    if (!mysqli_stmt_prepare($stmt, $req)) {
                        echo '<script>alert("Try againe")</script>';
                    } else {
                        mysqli_stmt_bind_param($stmt, 'i', $user);
                        if (!mysqli_execute($stmt)) {
                            echo '<script>alert("Try againe 2")</script>';
                        } else {
                            $allimgs = '';
                            $res = mysqli_stmt_get_result($stmt);
                            $row = mysqli_fetch_assoc($res);
                            for ($i = 0; $i < $count; $i++) {
                                $imgname[$i] = $row['Id'] . $i . '.' . $imgtype[$i];
                                $allimgs .= $imgname[$i] . '|';
                            }
                            $req2 = "UPDATE `post` SET `File`=? WHERE Id = ?";
                            $stmt2 = mysqli_stmt_init($con);
                            mysqli_stmt_prepare($stmt2, $req2);
                            mysqli_stmt_bind_param($stmt2, 'si', $allimgs, $row['Id']);
                            mysqli_stmt_execute($stmt2);
                            for ($i = 0; $i < $count; $i++) {
                                move_uploaded_file($imgurl[$i], $_SERVER['DOCUMENT_ROOT'] . '\Work\school project\images\community\posts\\' . $imgname[$i]);
                            }
                            echo '<script>alert("Post added")</script>';

                        }

                    }

                }
            }

        }

    }
    mysqli_close($con);

}
