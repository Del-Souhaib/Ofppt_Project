<?php
session_start();
if (isset($_POST['search'])) {
    $searchvalue = $_POST['searchvalue'];
    header('Location:..\pages\search.php?search=' . $searchvalue);
}
if (isset($_POST['buy'])) {
    if (isset($_SESSION['id'])) {

        $server = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'school_project';
        $con = mysqli_connect($server, $user, $password, $database);
        if (!$con) {
            echo '<script>alert("Try again")</script>';
        } else {
            $productid = mysqli_real_escape_string($con, $_GET['item']);
            $userid = mysqli_real_escape_string($con, $_SESSION['id']);

            if (isset($row['Colors']) && $row['Colors'] != '') {
                $color = mysqli_real_escape_string($con, $_POST['color']);
            } else {
                $color = null;
            }
            $price = mysqli_real_escape_string($con, $prodcutprice);
            $qte = mysqli_real_escape_string($con, $_POST['qantite']);
            $city = mysqli_real_escape_string($con, $_POST['cityname']);
            $zipcode = mysqli_real_escape_string($con, $_POST['zipcode']);
            $adresse1 = mysqli_real_escape_string($con, $_POST['adresse1']);
            $adresse2 = mysqli_real_escape_string($con, $_POST['adresse2']);
            $Date = mysqli_real_escape_string($con, date('y-m-d h:i:s'));

            $req = "INSERT INTO `order`(`Id_Product`, `Id_User`, `color`, `price`, `qte`, `City`, `Adresse1`,
         `Adresse2`, `Zip_Code`, `Date`) VALUES  (?,?,?,?,?,?,?,?,?,?)";
            $stmt = mysqli_stmt_init($con);
            if (!mysqli_stmt_prepare($stmt, $req)) {
                echo '<script>alert("Try again 2")</script>';
            } else {
                mysqli_stmt_bind_param($stmt, 'iisdisssss', $productid, $userid, $color, $price, $qte,
                    $city, $zipcode, $adresse1, $adresse2, $Date);
                if (!mysqli_stmt_execute($stmt)) {
                    echo '<script>alert("Try again 3")</script>';
                } else {
                    echo '<script>alert("operation complete")</script>';
                }
            }
            echo mysqli_error($con);
        }
    } else {
        header('Location:Login.php');
    }
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
    <link rel="stylesheet" href="../css/product.css">
    <title>Product</title>
</head>

<body>
    <header>
    <nav >

<ul id="menue" class="mb-0" >
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
            <button class="btn btn-primary" id="searchbutton" name="search">Search</button>

        </form>
    </li>




    <?php
if (isset($_SESSION['id'])) {
    echo '
<a class="item pr-5 " href="..\pages\mycarts.php">
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
    <main>
        <div class="container-fluid">
            <div class="row all">
                <?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'school_project';
$con = mysqli_connect($server, $user, $password, $database);
if (!$con) {
    echo '<script>alert("Try again")</script>';
} else {
    $req = "SELECT * FROM `product` WHERE Id=?";
    $productid = $_GET['item'];
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $req)) {
        echo '<script>alert("Try again 2")</script>';
    } else {
        mysqli_stmt_bind_param($stmt, 'i', $productid);
        if (!mysqli_stmt_execute($stmt)) {
            echo '<script>alert("Try again 3")</script>';
        } else {
            $res = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($res);
            $prodcutprice = $row['Price'];
            ?>
                <form class="col-xl-12 side2 pl-0" method="post">
                    <div class="row ">
                        <div class="col-md-7 mb-5">

                            <div class="swiper-container gallery-top">
                                <div class="swiper-wrapper">
                                    <?php
$count = substr_count($row['Pictures'], '|');
            for ($i = 0; $i <= $count; $i++) {
                echo '


<div class="swiper-slide" style="background-image:url(../images/store/products/' . explode('|', $row['Pictures'])[$i] . ')"></div>
';

            }
            ?>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next swiper-button-Black"></div>
                                <div class="swiper-button-prev swiper-button-Black"></div>
                            </div>
                            <div class="swiper-container gallery-thumbs">
                                <div class="swiper-wrapper">
                                    <?php
for ($i = 0; $i <= $count; $i++) {
                echo ' <div class="swiper-slide" style="background-image:url(../images/store/products/' . explode('|', $row['Pictures'])[$i] . ')"></div>';
            }
            ?>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-5 dt pl-5">
                            <div class="row">
                                <div class="col-12 ">
                                    <p class=" producttitle1"><?php echo $row['name']; ?></p>
                                </div>
                                <div class="col-12 mb-2 ">
                                    <p class="producttitle">- Pet : </h4>
                                    <p class="ml-4"> <?php echo $row['Pet']; ?> </p>
                                </div>
                                <div class="col-12 mb-2 ">
                                    <p class="producttitle">- Specification :</p>
                                    <p class="ml-4"> <?php echo $row['Specification']; ?> </p>
                                </div>
                                <?php
if (isset($row['Colors']) && $row['Colors'] != '') {
                echo '
<div class="col-12 mb-5 ">
<h4>- Colors :</h4>
<p class="ml-4"> ' . $row['Colors'] . ' </p>
</div>

';
            }

            ?>

                                <div class="col-12 mb-5 ">
                                    <h4>- Price :</h4>
                                    <p class="ml-4"style="display:none"  id="price"> <?php echo $row['Price']; ?> </p>

                                    <p class="ml-4" > <?php echo $row['Price']; ?> $</p>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm-6 mb-5">
                                    <a href="#form1" class="btn btn-success w-100" id="order">Buy</a>
                                </div>
                                <div class="col-sm-6 mb-5">
                                    <a href="..\pages\store\Carts.php?productid=<?php echo $row['Id'] ?>" class="btn btn-primary w-100" id="card"> Add to card </a>

                                </div>
                            </div>

                        </div>
                        <div class="col-12 pl-5 mb-5 Specification">
                            <h5 class="producttitle">- Details :</h5>
                            <p class="ml-4"><?php echo $row['Details'] ?></p>
                        </div>
                        <div class="col-12" id="form1">
                            <div class="row mb-5">
                            <div class="col-lg-1">
                                    </div>
                                <div class="col-11">
<p class="bigtitle">Order now !</p>
        </div>

                            </div>
                            <div>
                                <div class="row ">

                                    <div class="col-lg-1">
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="qantite">Quantity</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5">
                                        <input type="number" min="1" value="1" class="form-control"
                                            id="qantite" name="qantite">
                                    </div>
                                    <?php
if (isset($row['Colors']) && $row['Colors'] != '') {
                echo '
<div class="col-lg-2 col-md-4">
<label for="color">Color</label>
</div>
<div class="col-lg-3 col-md-6 mb-5">
<input type="text" placeholder="Enter your product color" class="form-control"
    id="color" name="color">
</div>
';
            }

            ?>

                                    <div class="col-lg-1">
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-1">
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="city">City</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5">
                                        <select id="city" name="cityname" class="form-control">
                                            <option value="Marrakech">Marrakech</option>
                                            <option value="Rabat">Rabat</option>
                                            <option value="Casablanca">Casablanca</option>
                                            <option value="Tanger">Tanger</option>
                                            <option value="Agadir">Agadir</option>
                                            <option value="Fes">Fes</option>
                                            <option value="Meknes">Meknes</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="phone">Zip code</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input type="text" minlength="4" maxlength="10" placeholder="Enter your zip code" required class="form-control"
                                            id="zipcode" name="zipcode">
                                    </div>

                                    <div class="col-lg-1">

                                    </div>
                                </div>

                                <div class="row mb-5">
                                    <div class="col-lg-1 ">

                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="adresse1">Adresse 1</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5">
                                        <input type="text" placeholder="Enter your adresse 1" class="form-control"
                                            id="adresse1" name="adresse1">
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="adresse2">Adresse 2</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input type="text" placeholder="Enter your adresse 2" class="form-control"
                                            id="adresse2" name="adresse2">
                                    </div>
                                    <div class="col-lg-1 ">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-1">
                                    </div>
                                    <div class="col-11">
                                        <p id="total"></p>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-1">
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <button class="btn btn-primary" disabled id="buy" name="buy">Buy</button><br><br>
                                    </div>
                                    <div class="col-lg-1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1">
                                    </div>
                                    <div class="col-11">
                                        <p class="error"></p>
                                        <p class="error"></p>
                                        <p class="error"></p>
                                        <p class="error"></p>
                                        <p class="error"></p>
                                        <p class="error"></p>
                                        <p class="error"></p>
                                        <p class="error"></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </div>

                        </form>
                        </div>

                        </div>



    <?php

        }

    }
    $stmt0 = mysqli_stmt_init($con);
    $req0 = "SELECT * FROM `product` LIMIT 8";
    if (!mysqli_stmt_prepare($stmt0, $req0)) {
        echo '<script>alert("Try again 2")</script>';
    } else {
        mysqli_stmt_execute($stmt0);
        if (!$res0 = mysqli_stmt_get_result($stmt0)) {
            echo '<script>alert("Try again 3")</script>';
        } else {

            ?>
 <div class="container-fluid last">
     <div class="row">
         <div class="col-12">
             <p class="bigtitle mb-5">- Related products</p>

         </div>
     </div>
     <div class="row">
         <div class="col-12">
             <div class="swiper-container swiper-container2">
                 <div class="swiper-wrapper swiper-wrapper2">
    <?php
while ($row = mysqli_fetch_assoc($res0)) {
                echo '
<a href="../pages/product.php?item=' . $row['Id'] . '" class="swiper-slide text-center">
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
            ?>

                 </div>

                 <!-- Add Arrows -->
                 <div class="swiper-button-next swiper-button-next2 swiper-button-Black"></div>
                 <div class="swiper-button-prev swiper-button-prev2 swiper-button-Black"></div>
             </div>
         </div>
     </div>
 </div>
 <?php

        }
    }
    ?>
    </main>
<?php
}

?>

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
    <!-- Swiper JS -->
    <script src="../package/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->


    <script src="../javascript/product.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</body>

</html>

<?php

?>