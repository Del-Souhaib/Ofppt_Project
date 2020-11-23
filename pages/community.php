<?php
session_start();
if (isset($_SESSION['id'])) {
    require '../pages/cummunity/addpost.php';
    if (isset($_POST['logout'])) {
        require '../pages/cummunity/logout.php';
    }
    ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="../css/community.css">
    <title>Community</title>
</head>

<body>
    <header>
        <nav class="sticky-top">
            <ul id="menue" class="sticky-top">
                <li class="logo"> <a href="index.php"><img src="../images/logo.svg" alt="" id="imglogo"
                            height="60px"></a>
                </li>
                <li class="toggle d-flex align-items-center"> <img src="../images/Icons/toggle.png" id="toggle" alt="" width="40" height="40">
                </li>
                <a class="item " href="../index.php">
                    <li>Home </li>
                </a>
                <a class="item " href="../pages/aboutus.php">
                    <li>Our story</li>
                </a>
                <a class="item" href="../pages/services.php">
                    <li>Our services</li>
                </a>
                <a class="item" href="../pages/store.php">
                    <li>Store</li>
                </a>
                <a class="item active" href="../pages/community.php">
                    <li> Community</li>
                </a>
                <a class="item " href="../pages/contact.php">
                    <li>Contact</li>
                </a>
                <?php
if (isset($_SESSION['id'])) {
        echo '
    <a class="item" href="..\pages\mycarts.php">
    <img src="../images\Icons\Carts.png" width="50" height="50">
</a>
';
    } else {
        echo '
               <li class="item button">
                    <a href="..\pages\Login.php">
                        <button type="submit" class="btn btn-primary">Join us</button>
                    </a>
                </li>';
    }

    ?>
            </ul>
        </nav>
        <h1 class="title">Our community</h1>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row all">
                <!--------Sticky navbar------->
                <form class="col-md-2 side1 " method="post">
                            <nav class="nav text-center">
                                <ul class="">
                                    <li class="togglecm "> <img src="../images/Icons/toggle.png" id="togglecm" alt=""
                                            width="40" height="40">
                                    </li>
                                    <a href="../pages/community.php">
                                        <li class="item2">Home</li>
                                    </a>
                                    <a href="../pages/profile.php">
                                        <li class="item2 ">Profile</li>
                                    </a>

                                    <button class="item2" id="logout" name="logout"> Logout </button>
                                </ul>
                            </nav>
                </form>
                <!--------- add Post-------->
                <div class="col-md-10 side2">
                    <form class="post" method="post" enctype="multipart/form-data">
                        <label for="post" id="postlabel">Write something</label>
                        <textarea class="form-control" name="posttext" id="post" rows="3"></textarea><br>
                        <div class="row">
                            <div class="col-6">
                                <input type="file" multiple name="file[]" class="form-control-file"
                                    id="exampleFormControlFile1">

                            </div>
                            <div class="col-6 text-right">
                                <button class="btn" name="post" id="send">Post</button>
                            </div>
                        </div>
                    </form>
                    <!-------------Cards------------>
                    <div id="posts">
                        <?php

    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);
    $req = "SELECT  post.Id as Postid,post.Text,post.File,post.Date,user.First_Name, user.Last_Name,user.Picture FROM user inner JOIN post  WHERE post.Id_User=user.Id  ORDER BY post.Date DESC ";
    $stmt = mysqli_stmt_init($con);
    //  $par='user.Id';
    if (!mysqli_stmt_prepare($stmt, $req)) {
        echo '<script>alert("Try again 2")</script>';
    } else {
        //  mysqli_stmt_bind_param($stmt,'s',$par);
        mysqli_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($res)) {
            $user0 = mysqli_real_escape_string($con, $_SESSION['id']);
            $post0 = mysqli_real_escape_string($con, $row['Postid']);
            /*like number**/

            $req3 = "SELECT count(Id) as 'like' FROM `love_react` WHERE Id_Post=?";
            $stmt3 = mysqli_stmt_init($con);

            if (!mysqli_stmt_prepare($stmt3, $req3)) {
                echo '<script>alert("requet error")</script>';
            } else {
                mysqli_stmt_bind_param($stmt3, 'i', $post0);
                if (!mysqli_stmt_execute($stmt3)) {
                    echo '<script>alert("Try again")</script>';

                } else {
                    $res3 = mysqli_stmt_get_result($stmt3);
                    $likenumber = mysqli_fetch_assoc($res3);

                }
            }

            echo '
                 <div class="cards" >
                    <div class="card mb-3">
                        <div class="card-body body1">
                            <img src="../images/community/Profiles/' . $row['Picture'] . '" width="70" height="70" alt=""  class="pdf">
                            <h5 class="card-title">' . $row['First_Name'] . ' ' . $row['Last_Name'] . '</h5>

                        </div>';
            $picnb = substr_count($row['File'], '|');
            $expd = explode('|', $row['File']);

            if ($picnb == 1) {

                echo '<img src="../images/community/posts/' . $expd[0] . '"  class="card-img-top img-fluid " alt="...">';
            }
            if ($picnb > 1) {

                echo '
                <div class="swiper-container">
                <div class="swiper-wrapper">
                ';

                for ($i = 0; $i < $picnb; $i++) {
                    echo '
                <div class="swiper-slide"><img src="../images/community/posts/' . $expd[$i] . '"  class="card-img-top img-fluid " alt="..."></div>
                ';
                }
                echo '
                </div>

                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                </div>
                ';
            }
            echo '<div class="card-body body2">
                                <p class="card-text">' . $row['Text'] . '</p>
                                <p class="card-text"><small class="text-muted">' . $row['Date'] . '</small></p>
                                <form method="post" id="lovereact">';

            $req2 = "SELECT * FROM `love_react` WHERE Id_Users=$user0 and Id_Post=$post0";
            $stmt2 = mysqli_stmt_init($con);

            if (!mysqli_stmt_prepare($stmt2, $req2)) {
                echo '<script>alert("requet error")</script>';
            } else {
                if (!mysqli_stmt_execute($stmt2)) {
                    echo '<script>alert("' . mysqli_error($con) . '")</script>';

                } else {
                    $res2 = mysqli_stmt_get_result($stmt2);

                    if (mysqli_fetch_assoc($res2) == 0) {
                        if ($likenumber['like'] == 0) {
                            echo '<p class="ml-3" id="like' . $post0 . '">0 </p>
                                  <img src="../images/Icons/love2.svg" name="love"  id="post' . $post0 . '" class="like"
                                   width="50" height="50" alt="" onclick="react(';
                            echo $user0 . ',' . $post0 . ')"> ';
                        } else if ($likenumber['like'] > 0) {
                            echo '<p class="ml-3" id="like' . $post0 . '">' . $likenumber['like'] . '  </p>
                                  <img src="../images/Icons/love2.svg" name="love" id="post' . $post0 . '" class="like"
                                  width="50" height="50" alt="" onclick="react(';
                            echo $user0 . ',' . $post0 . ')"> ';
                        }

                    } else {
                        if ($likenumber['like'] == 0) {
                            echo '<p class="ml-3" id="like' . $post0 . '">0 </p>
                                  <img src="../images/Icons/love.svg" name="love" id="post' . $post0 . '" class="like"
                                   width="50" height="50" alt="" onclick="react(';
                            echo $user0 . ',' . $post0 . ')"> ';
                        } else if ($likenumber['like'] > 0) {
                            echo '<p class="ml-3" id="like' . $post0 . '" id="like' . $post0 . '">' . $likenumber['like'] . '  </p>
                                  <img src="../images/Icons/love.svg"  name="love" id="post' . $post0 . '" class="like"
                                  width="50" height="50" alt="" onclick="react(';
                            echo $user0 . ',' . $post0 . ')"> ';
                        }

                    }
                    echo
                        '<img src="../images/Icons/comment.png" onclick="displaycomments(' . $row['Postid'] . ')" id="commenticon" class="ml-5" width="60" height="60">
                    <div id="commentaires' . $row['Postid'] . '" class="commentaires">
                    <div class="mt-3 commenttextbox d-flex flex-row" id="commentstool">
                        <input type="text" placeholder="Write something..."   id="commenttext' . $row['Postid'] . '"  class=" w-100 commenttext" >
                        <p class="btn btn-primary" id="sendcomment" onclick="comment(' . $row['Postid'] . ')" >Send</p>
                     </div>
                     <div class="comments mt-2" id="clientscomment">
                     ';

                    $req3 = "SELECT * FROM `comment` INNER JOIN user on user.Id=comment.user_id WHERE post_id=" . $row['Postid'];
                    $stmt3 = mysqli_stmt_init($con);
                    if (!mysqli_stmt_prepare($stmt3, $req3)) {
                        echo '<script>alert("requet error")</script>';
                    } else {
                        if (!mysqli_stmt_execute($stmt3)) {
                            echo '<script>alert("' . mysqli_error($con) . '")</script>';

                        } else {
                            $res3 = mysqli_stmt_get_result($stmt3);
                            while ($row2 = mysqli_fetch_assoc($res3)) {
                                echo '<div class="cmnts pt-2 pl-3 pb-2">';
                                echo '<p class="mb-1">' . '<img src="../images/community/Profiles/' . $row2['Picture'] . '" class="mr-2" width="50" height="50"> ';
                                echo $row2['First_Name'] . ' ';
                                echo $row2['Last_Name'] . '</p><br>';
                                echo '<p class="mb-1">' . $row2['comment'] . '</p><br>';
                                echo '<p class="d-flex flex-end">' . $row2['Date'] . '</p><br>';
                                echo '</div>';

                            }
                        }
                    }

                    echo '
                    </div>
                    </div>
                    </div>
                        </form>
                        </div>
                        </div>';
                }

            }

        }
    }

    ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row text-center">
                <div class=" col-md-4">
                    <p class="tmplt">This Template made by Souhaib & Radouan</p>

                </div>
                <div class="col-md-8">
                    Follow us :
                    <a href="https://www.facebook.com/Del.Souhaib"><img src="../images/Social media/facebook.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href="https://www.linkedin.com/in/souhaib-allout/"><img src="../images/Social media/linkedin.png" class="social" class="social" width="50px"
                            height="50px" alt=""></a>
                    <a href=""> <img src="../images/Social media/google.png" class="social" width="50px" height="50px"
                            alt=""></a>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://unpkg.com/swiper/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <!-- Swiper JS -->
    <script src="../package/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>


        var swiper = new Swiper('.swiper-container', {

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script src="../javascript/community.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

</body>

</html>
<?php
} else {
    header('Location:Login.php');
}
?>