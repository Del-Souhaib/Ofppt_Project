<?php
session_start();
if (isset($_SESSION['admin'])) {
    $id = $_GET['Id'];
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);

    if (!$con) {
        echo '<script>alert("Try again")</script>';
        exit();
    } else {
        $req = "SELECT * FROM `order` as ord INNER JOIN user as us ON ord.Id_User =us.Id INNER JOIN product as
         prd ON prd.Id=ord.Id_Product  WHERE ord.Id=?  ";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("try again")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            mysqli_stmt_execute($stmt);
            $res = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($res);
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
    <link rel="stylesheet" href="..\assists\admin.css">
    <title>Admin</title>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="row">
                <!--------Sticky navbar------->
                <div class="col-md-2 col-lg-2 side1 sticky-top">
                    <nav class="nav text-center sticky-top">
                        <ul class="sticky-top">
                            <li class="togglecm text-right"> <img src="toggle.png" id="togglecm" alt="" width="40"
                                    height="40">
                            </li>
                            <a href="..\messages\messages.php">
                                <li class="item2" id="messages0">Messages</li>
                            </a>
                            <a href="..\products\products.php">
                                <li class="item2 " id="products">Products</li>
                            </a>
                            <a href="..\orders\orders.php">
                                <li class="item2 " id="orders">Orders</li>
                            </a>
                            <a href="..\hotsells\hotsells.php">
                                <li class="item2 " id="hotsells">Hot sells</li>
                            </a>
                            <a href="..\users\users.php">
                                <li class="item2 " id="users">Users</li>
                            </a>
                            <a href="..\posts\posts.php">
                                <li class="item2 " id="posts">Posts</li>
                            </a>
                            <a href="..\profiles\profile.php">
                                <li class="item2 " id="profile">Profile</li>
                            </a>
                            <a href="..\gr\logout.php">
                                <li class="item2" id="logout" name="logout"> Log out </li>
                            </a>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-10 col-lg-10 side2 ">
                    <div class="row">
                        <div class="col-12 text-center mb-5">
                            <h1 class="bigtitle">Welcome to Admin page</h1>
                        </div>
                    </div>
                    <div class="row">
                        <form method="post" enctype="multipart/form-data" id="messages" class="col-12">
                            <div>
                                <div class="row ">

                                    <div class="col-lg-1">

                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="firstname">First name</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5">
                                        <input type="text" value="<?php echo $row['First_Name'] ?>" class="form-control" Readonly>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="lastname">Last name</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5">
                                        <input type="text" value="<?php echo $row['Last_Name'] ?>" class="form-control" Readonly>
                                    </div>
                                    <div class="col-lg-1">
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-1">
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="phone">Phone number</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input type="text" value="<?php echo $row['Phone_number'] ?>" class="form-control" Readonly>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input type="text" value="<?php echo $row['Email'] ?>" class="form-control" Readonly>
                                    </div>

                                    <div class="col-lg-1">
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-1">
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="phone">Product name</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input type="text" value="<?php echo $row['name'] ?>" class="form-control" Readonly>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="email">Images</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <?php
$count = substr_count($row['Pictures'], '|');
            for ($i = 0; $i <= $count; $i++) {
                echo '<img width="50" height="50" src="\Work\school project\images\store\products\\' . explode('|', $row['Pictures'])[$i] . '">';
            }

            ?>
                                    </div>

                                    <div class="col-lg-1">
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-1 ">
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="city">Qte</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input type="text" value="<?php echo $row['qte'] ?>" class="form-control" Readonly>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="city">Color</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input type="text" value="<?php echo $row['color'] ?>" class="form-control" Readonly>
                                    </div>

                                    <div class="col-lg-1 ">
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-1 ">
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="city">Price</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input type="text" value="<?php echo $row['price'] ?>$" class="form-control" Readonly>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="city">totale Price</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input type="text" value="<?php echo ($row['price'] * $row['qte']) ?>$" class="form-control" Readonly>
                                    </div>
                                    <div class="col-lg-1 ">
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-1 ">
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="city">Date</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input type="text" value="<?php echo $row['Date'] ?>" class="form-control" Readonly>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="city">City</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input type="text" value="<?php echo $row['City'] ?>" class="form-control" Readonly>
                                    </div>
                                    <div class="col-lg-1 ">
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-1 ">
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="adresse1">Adresse 1</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input type="text" value="<?php echo $row['Adresse1'] ?>" class="form-control" Readonly>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="adresse2">Adresse 2</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <input type="text" value="<?php echo $row['Adresse2'] ?>" class="form-control" Readonly>
                                    </div>
                                    <div class="col-lg-1 ">

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-1">
                                    </div>
                                    <div class="col-lg-5 col-md-5">
                                        <a href="\Work/school project\pages\product.php?item=<?php echo $row['Id_Product'] ?>" class="btn btn-warning">Visite the product</a>
                                    </div>
                                    <div class="col-lg-5 col-md-5">
                                        <a href="../Orders/orders.php" class="btn btn-primary">Back to list</a>
                                    </div>
                                    <div class="col-lg-1">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>


    <script src="..\assists\admin.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</body>

</html>


<?php
}
        mysqli_close($con);
    }
} else {
    header('Location:..\gr\Admin_login.php');

}
?>