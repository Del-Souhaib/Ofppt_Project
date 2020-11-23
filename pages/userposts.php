<?php
session_start();
if (isset($_SESSION['id'])) {
    require '../pages/cummunity/addpost.php';

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
    <link rel="stylesheet" href="../css/userposts.css">
    <title>Posts</title>
</head>

<body>
    <header>
        <nav class="sticky-top">
            <ul id="menue" class="sticky-top">
                <li class="logo"> <a href="index.html"><img src="../images/logo.svg" alt="" id="imglogo"
                            height="60px"></a>
                </li>
                <li class="toggle"> <img src="../images/Icons/toggle.png" id="toggle" alt="" width="40" height="40">
                </li>
                <a class="item " href="../index.html">
                    <li>Home </li>
                </a>
                <a class="item " href="../pages/aboutus.html">
                    <li>Our story</li>
                </a>
                <a class="item" href="../pages/services.html">
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
                <li class="item button">
                    <a href="../pages/Login.html">
                        <button type="submit" class="btn btn-primary">Join us</button>
                    </a>
                </li>
            </ul>
        </nav>
        <h1 class="title">My posts</h1>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row all">
                <!--------Sticky navbar------->
                <form class="col-md-2 side1 sticky-top" method="post">
                    <nav class="nav text-center sticky-top">
                        <ul class="sticky-top">

                            <nav class="nav text-center sticky-top">
                                <ul class="sticky-top">
                                    <li class="togglecm text-right"> <img src="../images/Icons/toggle.png" id="togglecm"
                                            alt="" width="40" height="40">
                                    </li>
                                    <a href="../pages/community.php">
                                        <li class="item2">Home</li>
                                    </a>
                                    <a href="../pages/profile.php">
                                        <li class="item2 ">Profile</li>
                                    </a>
                                    <a href="../pages/userposts.php">
                                        <li class="item2 ">Posts</li>
                                    </a>
                                    <li class="item2" id="logout" name="logout"> Logout </li>
                                </ul>
                            </nav>



                        </ul>
                    </nav>
                </form>
                <div class="col-md-10 side2">
                    <div id="posts">
                    </div>
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
                    <a href=""><img src="../images/Social media/facebook.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href=""><img src="../images/Social media/linkedin.png" class="social" class="social" width="50px"
                            height="50px" alt=""></a>
                    <a href=""> <img src="../images/Social media/google.png" class="social" width="50px" height="50px"
                            alt=""></a>
                </div>
            </div>
        </div>
    </footer>


    <script src="../javascript/userposts.js"></script>
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