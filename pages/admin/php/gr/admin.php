<?php
session_start();
if (isset($_SESSION['admin'])) {

    ////save
    if (isset($_POST['saveprofile'])) {
        require 'php/saveprofile.php';

    }
    if (isset($_POST['addproduct'])) {
        require 'php/addproductcode.php';
    }
    if (isset($_POST['addhotsell'])) {
        require 'php/addhotsellcode.php';
    }
    ///Delete
    if (isset($_POST['deleteaccount'])) {
        require 'php/deleteprofile.php';
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
    <link rel="stylesheet" href="./admin.css">
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
                            <li class="item2 " id="profile">Profile</li>
                            <li class="item2" id="messages0">Messages</li>
                            <li class="item2 " id="orders">Orders</li>
                            <li class="item2 " id="products">Products</li>
                            <li class="item2 " id="addproduct">Add product</li>
                            <li class="item2 " id="hotsells">Hot sells</li>
                            <li class="item2 " id="addhotsell">Add Hot sells</li>
                            <li class="item2 " id="users">Users</li>
                            <li class="item2 " id="posts">Posts</li>
                            <li class="item2" id="logout" name="logout"> Log out </li>
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
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </main>









    <script src="./admin.js"></script>
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
    header('Location:Admin_login.php');

}
?>