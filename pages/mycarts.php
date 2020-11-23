<?php
session_start();
if (isset($_SESSION['id'])) {

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
    <link rel="stylesheet" href="../css/mycarts.css">

    <title>My Orders</title>
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
                <a class="item " href="../pages/community.php">
                    <li> Community</li>
                </a>
                <a class="item " href="../pages/contact.php">
                    <li>Contact</li>
                </a>
                <?php
if (isset($_SESSION['id'])) {
        echo '
    <a class="item" href="..\pages\mycarts.php">
    <img src="../images\Icons\Carts2.png" width="50" height="50">
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
    </header>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-right ">
                <p class="btn btn-success w-50 align-center" id="orders">My orders</p>
            </div>
            <div class="col-md-6 text-end">
                <p class="btn btn-primary w-50 " id="carts">My carts</p>
            </div>
        </div>
        <div class="row orders" id="form1">
        <?php
$server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);
    $userid = $_SESSION['id'];
    if (!$con) {
        echo '<script>alert("Try again")</script>';
        exit();
    } else {
        $req = "SELECT * FROM `order` as ord INNER JOIN user as us ON ord.Id_User =us.Id  Where us.Id=? ";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("try again")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'i', $userid);
            mysqli_stmt_execute($stmt);
            $res = mysqli_stmt_get_result($stmt);
            echo '
        <table  class="table table-striped">
         <thead>
        <tr>
        <th scope="col">Full Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone number</th>
        <th scope="col">City</th>
        <th scope="col">Adresse</th>
        <th scope="col">zip code</th>
      <th scope="col">Color</th>
      <th scope="col">Price</th>
      <th scope="col">Qte</th>
      <th scope="col">Totale</th>

      <th scope="col">Commande Date</th>


       </tr>
        </thead>
     <tbody>
        ';
            while ($row = mysqli_fetch_assoc($res)) {
                echo '
     <tr>
     <td>' . $row['First_Name'] . ' ' . $row['Last_Name'] . '</td>
     <td>' . $row['Email'] . '</td>
     <td>' . $row['Phone_number'] . '</td>
     <td>' . $row['City'] . '</td>
     <td>' . $row['Adresse1'] . ' ' . $row['Adresse2'] . '</td>
     <td>' . $row['Zip_Code'] . '</td>
       <td>' . $row['color'] . '</td>
       <td>' . $row['price'] . '</td>
       <td>' . $row['qte'] . '</td>
       <td>' . $row['qte'] * $row['price'] . '</td>

       <td>' . $row['Date'] . '</td>
       <td><a href="\Work/school project\pages\product.php?item=' . $row['Id_Product'] . '" class="btn btn-primary">product</a>
       </td>


     </tr>
     ';
            }

            echo '
      </tbody>
     </table>

      ';

        }
        mysqli_close($con);
    }
    ?>
        </div>
        <div class="row " id="form2">
        <?php
$server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);
    $userid = $_SESSION['id'];
    if (!$con) {
        echo '<script>alert("Try again")</script>';
        exit();
    } else {
        $req = "SELECT *,carts.Id as cartid,product.Id as pdid FROM `carts` INNER JOIN product on carts.Product_id=product.Id WHERE User_id=? ";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("try again")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'i', $userid);
            mysqli_stmt_execute($stmt);
            $res = mysqli_stmt_get_result($stmt);
            while ($row = mysqli_fetch_assoc($res)) {
                echo '
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="card" style="width: 18rem;">
                            <a href="..\pages\product.php?item=' . $row['pdid'] . '">
                                <img src="../images/store/products/' . explode('|', $row['Pictures'])[0] . '" class="card-img-top" alt="...">
                            </a>
                                <a href="..\pages\product.php?item=' . $row['pdid'] . '" class="card-body d-flex justify-content-between">
                                    <p class="card-text">' . $row['name'] . '</p>
                                    <p>' . $row['Price'] . '$</p>
                                </a>
                                <a href="..\pages\store\deletecart.php?cartid=' . $row['cartid'] . '" class="card-footer  btn bg-danger">
                                   <p class="pt-2">Delete</p>
                                </a>
                            </div>
                        </div>

                    ';

            }
            echo '';
        }
        mysqli_close($con);
    }
    ?>

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



    <script src="../javascript/mycarts.js"></script>
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