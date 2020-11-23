<?php
session_start();
if (isset($_SESSION['admin'])) {
    $id = $_GET['Id'];

    $messagecontent = $_GET['content'];
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);

    if (!$con) {
        echo '<script>alert("Try again")</script>';
        exit();
    } else {
        $req = "SELECT * FROM `message` WHERE Id=? ";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("try again")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            if (!mysqli_stmt_execute($stmt)) {
                echo '<script>alert("try again 3")</script>';
            } else {
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
                        <?php
if ($messagecontent == "Normal") {
                    ?>
                        <form class="container" id="forms2" method="post">
                            <div class="row ">
                                <div class="col-md-4 col-lg-2">
                                    <label for="name">Full name</label>
                                </div>
                                <div class="col-md-8 col-lg-4 mb-4">
                                    <input type="text" class="form-control" value="<?php echo $row['Full_Name'] ?>"
                                        name="fullname1" id="fullname" Readonly>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <label for="email">Email</label>
                                </div>
                                <div class="col-md-8 col-lg-4 mb-4">
                                    <input type="text" class="form-control" name="email1" id="email1"
                                        value="<?php echo $row['Email'] ?>" Readonly>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <label for="message1">Message </label>
                                </div>
                                <div class="col-md-8 col-lg-8 mb-4">
                                    <textarea class="form-control" id="message1" name="message1" rows="3" Readonly>
                                <?php echo $row['Message'] ?>
                                </textarea>
                                </div>
                                <div class="col-12">
                                    <p id="error1"></p>
                                    <p id="error2"></p>
                                    <p id="error3"></p>
                                </div>

                                <div class="col-6">
                                    <a href="..\messages\messages.php" class="btn btn-primary" name="delete2">Back to list</a>
                                </div>

                            </div>
                        </form>
                        <?php
} else {
                    ?>
                        <form class="container" id="forms3" method="post">
                            <div class="row">
                                <div class="col-md-4 col-lg-2">
                                    <label for="name2">Full name</label>
                                </div>
                                <div class="col-md-8 col-lg-4 mb-4">
                                    <input type="text" class="form-control" name="name2" id="fullname2"
                                        value="<?php echo $row['Full_Name'] ?>" Readonly>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <label for="email2">Email</label>
                                </div>
                                <div class="col-md-8 col-lg-4 mb-4">
                                    <input type="text" class="form-control" name="email2" id="email2"
                                        value="<?php echo $row['Email'] ?>" Readonly>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <label for="number">Phone number </label>
                                </div>
                                <div class="col-md-8 col-lg-4 mb-4">
                                    <input type="text" class="form-control" name="phonenumber" id="phone"
                                        value="<?php echo $row['Phone_Number'] ?>" Readonly>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <label for="adresse">Write adresse </label>
                                </div>
                                <div class="col-md-8 col-lg-4 mb-4">
                                    <input type="text" class="form-control" name="adresse" id="adresse"
                                        value="<?php echo $row['Adresse'] ?>" Readonly>
                                </div>
                                <div class="col-md-4 col-lg-2">
                                    <label for="message2">Message </label>
                                </div>
                                <div class="col-md-8 col-lg-8 mb-4">
                                    <textarea class="form-control" Readonly name="message2" id="message2" rows="3">
                                        <?php echo $row['Message'] ?></textarea>
                                </div>
                                <div class="col-12">
                                    <p id="error4"></p>
                                    <p id="error5"></p>
                                    <p id="error6"></p>
                                    <p id="error7"></p>
                                    <p id="error8"></p>

                                </div>
                                <div class="col-6">
                                    <a href="..\messages\deletemessage.php?content=' . $row['Message_Content'] . '&Id=' . $row['Id'] . '" class="btn btn-danger" name="delete2">Delete</a>
                                </div>
                                <div class="col-6">
                                    <a href="..\messages\messages.php" class="btn btn-primary" name="delete2">Back to list</a>
                                </div>
                            </div>
                        </form>
                        <?php
}
                ?>
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
        }

    }
    echo mysqli_error($con);

    mysqli_close($con);
} else {
    header('Location:..\gr\Admin_login.php');

}
?>