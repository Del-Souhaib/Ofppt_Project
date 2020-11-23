<?php
session_start();
if (isset($_POST['search'])) {
    $searchvalue = $_POST['searchvalue'];
    header('Location:..\pages\search.php?search=' . $searchvalue);
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
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="..\css\search.css">
    <title>Search</title>
</head>

<body>
    <header>
        <nav class="sticky-top" >

            <ul id="menue" class="sticky-top">
                <li class="logo "> <a href="..\pages\store.php"><img src="../images/logo.svg" alt="" id="imglogo"
                            height="60px" ></a>
                </li>
                <li class="toggle d-flex align-items-center"> <img src="../images/Icons/toggle.png" id="toggle" alt="" width="40" height="40">
                </li>
                <li class="item">
                    <form method="post" class="col-12 search mb-0 pl-0 pb-0">
                        <div class="sotrelogo">

                        </div>
                        <input type=" text" class="" id="searchbar" name="searchvalue" required>
                        <button class="btn btn-primary" name="search">Search</button>

                    </form>
                </li>




                <?php
if (isset($_SESSION['id'])) {
    echo '
    <a class="item pr-5 pb-0" href="..\pages\mycarts.php">
    <img src="../images\Icons\Carts.png" width="50" height="50">
</a>
';
} else {
    echo '
               <li class="item button pr-5">
                    <a href="..\pages\Login.php">
                        <button type="submit" class="btn btn-primary">Join us</button>
                    </a>
                </li>';
}

?>
            </ul>
        </nav>

    </header>
    <main class="pr-0">
        <div class="container-fluid mt-0">
            <div class="row all">

                <div class="col-xl-3 side1 pl-0 pr-0">
                    <nav id="nav2">
                        <ul class="items ">
                            <li class="item pt-5">
                                <div class="animal ">
                                    <img src="../images/Icons/right.svg" class="navarrow" width="15" height="15" alt="">
                                    <a href="selectproduct.php?pet=Dogs" class="pet "> Dogs</a>
                                </div>
                                <ul class="dropdown mt-2">
                                    <a href="selectproduct.php?pet=Dogs&&category=Food">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Food</li>
                                    </a>
                                    <a href="selectproduct.php?pet=Dogs&&category=Beds">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Beds</li>
                                    </a>
                                    <a href="selectproduct.php?pet=Dogs&&category=Toys">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Toys </li>
                                    </a>
                                    <a href="selectproduct.php?pet=Dogs&&category=Bowls">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Bowls</li>
                                    </a>
                                    <a href="selectproduct.php?pet=Dogs&&category=Other">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Other </li>
                                    </a>
                                </ul>
                            </li>
                            <li class="item">
                                <div class="animal">
                                    <img src="../images/Icons/right.svg" class="navarrow" width="15" height="15" alt="">
                                    <a href="selectproduct.php?pet=Cats" class="pet">Cats</a>
                                </div>
                                <ul class="dropdown">
                                    <a href="selectproduct.php?pet=Cats&&category=food">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Food</li>
                                    </a>
                                    <a href="selectproduct.php?pet=Cats&&category=Beds">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Beds</li>
                                    </a>
                                    <a href="selectproduct.php?pet=Cats&&category=Toys">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Toys </li>
                                    </a>
                                    <a href="selectproduct.php?pet=Cats&&category=Bowls">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Bowls </li>
                                    </a>
                                    <a href="selectproduct.php?pet=Cats&&category=Other">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Other </li>
                                    </a>
                                </ul>
                            </li>
                            <li class="item">
                                <div class="animal">
                                    <img src="../images/Icons/right.svg" class="navarrow" width="15" height="15" alt="">
                                    <a href="selectproduct.php?pet=Birds" class="pet"> Birds</a>
                                </div>
                                <ul class="dropdown">
                                    <a href="selectproduct.php?pet=Birds&&category=Food">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Food </li>
                                    </a>
                                    <a href="selectproduct.php?pet=Birds&&category=Kennels">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Kennels </li>
                                    </a>
                                    <a href="selectproduct.php?pet=Birds&&category=Toys">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Toys </li>
                                    </a>
                                    <a href="selectproduct.php?pet=Birds&&category=Other">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Other </li>
                                    </a>
                                </ul>
                            </li>
                            <li class="item">
                                <div class="animal">
                                    <img src="../images/Icons/right.svg" class="navarrow" width="15" height="15" alt="">
                                    <a href="selectproduct.php?pet=fishes" class="pet"> Fishes</a>
                                </div>
                                <ul class="dropdown">
                                    <a href="selectproduct.php?pet=Fishes&&category=Food">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Food</li>
                                    </a>
                                    <a href="selectproduct.php?pet=Fishes&&category=Glass bowl">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            glass bowl</li>
                                    </a>
                                    <a href="selectproduct.php?pet=Fishes&&category=Toys">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Toys </li>
                                    </a>
                                    <a href="selectproduct.php?pet=Fishes&&category=Other">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Other </li>
                                    </a>
                                </ul>
                            </li>
                            <li class="item">
                                <div class="animal">
                                    <img src="../images/Icons/right.svg" class="navarrow" width="15" height="15" alt="">
                                    <a href="selectproduct.php?pet=hamsters" class="pet"> Hamsters</a>
                                </div>
                                <ul class="dropdown">
                                    <a href="selectproduct.php?pet=Hamsters&&category=Food">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Food </li>
                                    </a>
                                    <a href="selectproduct.php?pet=Hamsters&&category=Beds">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Beds </li>
                                    </a>
                                    <a href="selectproduct.php?pet=Hamsters&&category=Toys">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Toys</li>
                                    </a>
                                    <a href="selectproduct.php?pet=Hamsters&&category=Other">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Other</li>
                                    </a>
                                </ul>
                            </li>
                            <li class="item">
                                <div class="animal">
                                    <img src="../images/Icons/right.svg" class="navarrow" width="15" height="15" alt="">
                                    <a href="selectproduct.php?pet=horses" class="pet"> Horses</a>
                                </div>
                                <ul class="dropdown">
                                    <a href="selectproduct.php?pet=Food&&category=Food">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Food</li>
                                    </a>
                                    <a href="selectproduct.php?pet=Beds&&category=Beds">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Beds </li>
                                    </a>
                                    <a href="selectproduct.php?pet=Toys&&category=Toys">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Toys </li>
                                    </a>
                                    <a href="selectproduct.php?pet=Toys&&category=Other">
                                        <li> <img src="../images/Icons/right.svg" width="15" height="15" alt="">
                                            Other</li>
                                    </a>
                                </ul>
                            </li>
                            <li class="item">
                                <div class="animal">
                                    <img src="../images/Icons/right.svg" class="navarrow" width="15" height="15" alt="">
                                    <a href="selectproduct..php?pet=other"> Other</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-9 side2">
                    <div class="container-fluid ">


                        <?php
$searchvalue = '%' . $_GET['search'] . '%';
$title = $_GET['search'];

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'school_project';
$con = mysqli_connect($server, $user, $password, $database);
if (!$con) {
    echo '<script>alert("Try again")</script>';
} else {
    $stmt0 = mysqli_stmt_init($con);
    $req0 = "SELECT * FROM `product` WHERE `name` LIKE ? OR Pet LIKE ? OR Category LIKE ? OR Specification LIKE ?
     OR Details LIKE ? OR words LIKE ?";
    if (!mysqli_stmt_prepare($stmt0, $req0)) {
        echo '<script>alert("Try again 2")</script>';
    } else {
        mysqli_stmt_bind_param($stmt0, 'ssssss', $searchvalue, $searchvalue, $searchvalue, $searchvalue,
            $searchvalue, $searchvalue);
        mysqli_stmt_execute($stmt0);
        if (!$res0 = mysqli_stmt_get_result($stmt0)) {
            echo '<script>alert("Try again 3")</script>';
        } else {
            echo '
<div class="row pb-4 pt-5">
    <div class="col-12">
        <h2 class="bigtitle ">Search Result : ' . $title . '</h2>
    </div>
</div>
<div class="row">
            ';
            while ($row = mysqli_fetch_assoc($res0)) {
                echo '

                    <a href="../pages/product.php?item=' . $row['Id'] . '" class="col-md-4" >
                        <div class="card" style="width: 18rem;">
                            <img src="../images/store/products/' . explode('|', $row['Pictures'])[0] . '" class="card-img-top" alt="...">
                            <div class="card-body d-flex justify-content-between">
                                <p class="card-text">' . $row['name'] . '</p>
                                <p class="card-text">' . $row['Price'] . '$</p>
                            </div>
                        </div>
                    </a>


                ';
            }
            echo '

            ';
        }

    }
    mysqli_close($con);
}
?>
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



    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

    <!-- Initialize Swiper -->


    <script src="../javascript/search.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</body>

</html>