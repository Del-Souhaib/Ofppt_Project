<?php
session_start();
if (isset($_SESSION['id'])) {
    /////load
    require 'profile/load.php';

    //////save
    require 'profile/save.php';
    ////delete
    require 'profile/delete.php';
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
    <link rel="stylesheet" href="../css/profile.css">

    <title>Profile</title>
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
            <div class="row">
                <!--------Sticky navbar------->
                <form class="col-md-2 side1 " method="post">
                            <nav class="nav text-center">
                                <ul class="">
                                    <li class="togglecm"> <img src="../images/Icons/toggle.png" id="togglecm" alt=""
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
                <div class="col-md-10 side2 ">
                    <form action="" method="post" id="form1" enctype="multipart/form-data">
                        <div class="row">
                            <div class=" col-12 mb-5">
                                <h2 class="bigtitle">Profile</h2>
                            </div>
                        </div>
                        <div class="row mb-5 line1">
                            <div class="col-lg-1">
                            </div>
                            <div class="col-2 mr-5">
                                <img src="../images/community/Profiles/<?php echo $row['Picture'] ?>" width="120" height="120"
                                    alt="" class="pdf">
                            </div>
                            <div class="col-4 ml-5">

                                <h3><?php echo $row['First_Name'] . ' ' . $row['Last_Name'] ?> </h3>
                            </div>
                            <div class="col-lg-1">
                            </div>
                        </div>
                        <div class="row ">

                            <div class="col-lg-1">

                            </div>
                            <div class="col-lg-2 col-md-4">
                                <label for="firstname">First name</label>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5">
                                <input type="text" placeholder="Enter your first name" class="form-control"
                                    name="firstname" id="firstname" value="<?php echo $row['First_Name'] ?>">
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <label for="lastname">Last name</label>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5">
                                <input type="text" placeholder="Enter your alst name" class="form-control"
                                    name="lastname" id="lastname" value="<?php echo $row['Last_Name'] ?>">
                            </div>
                            <div class="col-lg-1">

                            </div>

                        </div>
                        <div class="row mb-0">
                            <div class="col-lg-1 ">

                            </div>
                            <div class="col-lg-2 col-md-4">
                                <label for="pic">Upload your picture</label>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5">
                                <input type="file" class="form-control-file" name="image" id="pic">
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <label for="pic">Sexe</label>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5">
                                <input type="radio" name="sexe" value="man" id="Man" name="man"
                                    <?php if ($row['sexe'] == 'man') {echo 'Checked';}?>> Man
                                <input type="radio" name="sexe" value="woman" id="Woman" name="woman"
                                    <?php if ($row['sexe'] == 'woman') {echo 'Checked';}?> class="ml-5"> Woman
                            </div>
                            <div class="col-lg-1 ">

                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <label for="email2">Email</label>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5">
                                <input type="text"  class="form-control" id="email2"
                                    name="email" value="<?php echo $row['Email'] ?>">
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <label for="phone">Phone number</label>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <input type="text" class="form-control" required
                                    id="phone" name="phonenumber" value="<?php echo $row['Phone_number'] ?>">
                            </div>
                            <div class="col-lg-1">
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <label for="Birthday">Birthday</label>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5">
                                <input type="date"  class="form-control" id="Birthday"
                                    name="birthday" value="<?php echo $row['Birthday'] ?>">
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <label for="security">Favorite place (Security question)</label>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <input type="text" class="form-control" required
                                    id="security" name="security" value="<?php echo $row['Security question'] ?>">
                            </div>
                            <div class="col-lg-1">
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-lg-1">

                            </div>
                            <div class="col-lg-2 col-md-4">
                                <label for="password2">Password</label>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-5">
                                <input type="password" placeholder="Enter a password" class="form-control"
                                    name="password1" id="password2">
                            </div>
                            <div class="col-lg-2 col-md-4">
                                <label for="password3">Valid password</label>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <input type="password" placeholder="Enter password again" class="form-control"
                                    name="password2" id="password3">
                            </div>
                            <div class=" col-lg-1">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1">
                            </div>
                            <div class="col-5 ">
                                <button class="btn btn-primary" id="signup" name="save">Save</button><br><br>
                            </div>
                            <div class="col-5 ">
                                <button class="btn btn-danger" id="delete" name="delete">Delete my
                                    account</button><br><br>

                            </div>

                            <div class="col-lg-1">

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-1">
                            </div>
                            <div class="col-11">
                                <p id="error3"></p>
                                <p id="error4"></p>
                                <p id="error5"></p>
                                <p id="error6"></p>
                                <p id="error7"></p>
                            </div>
                        </div>
                    </form>
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




    <script src="../javascript/profile.js"></script>
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