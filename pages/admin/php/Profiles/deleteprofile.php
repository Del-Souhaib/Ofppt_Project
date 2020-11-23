
<?php
session_start();
if (isset($_SESSION['admin'])) {
    if (isset($_POST['delete'])) {
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'school_project';
        $con = mysqli_connect($server, $user, $password, $database);
        if (!$con) {
            echo '<script>alert("Try again")</script>';
        } else {
            $admin = $_SESSION['admin'];
            $req = "DELETE FROM `admins` WHERE Id=?";
            $stmt = mysqli_stmt_init($con);
            if (!mysqli_stmt_prepare($stmt, $req)) {
                echo '<script>alert("Try again 2")</script>';
            } else {
                mysqli_stmt_bind_param($stmt, 'i', $admin);
                if (!mysqli_stmt_execute($stmt)) {
                    echo '<script>alert("Try again")</script>';
                } else {
                    unset($_SESSION['admin']);
                    header('Location:Admin_login.php');
                }
                mysqli_close($con);
            }
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
                            <?php
/////load
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);
    if (!$con) {
        echo 'Try again';
    } else {
        $admin = $_SESSION['admin'];
        $req = "SELECT Name,Email FROM `admins` WHERE Id=?";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo 'Try again 2';
        } else {
            mysqli_stmt_bind_param($stmt, 'i', $admin);
            mysqli_stmt_execute($stmt);
            $res = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($res);
            ?>
                            <form method="post">
                                <div class="row ">
                                    <div class="col-12 mb-5">
                                        <h2 class="bigtitle">Add admin</h2>
                                    </div>
                                    <div class="col-lg-1">

                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="firstname">Name</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5">
                                        <input type="text" require value="<?php echo $row['Name']; ?>"
                                            placeholder="Enter your first name" name="name" class="form-control"
                                            id="firstname" readonly>
                                    </div>
                                    <div class="col-lg-2 col-md-4">
                                        <label for="email2">Email</label>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5">
                                        <input type="email" require value="<?php echo $row['Email'] ?>" name="email"
                                            placeholder="Enter your email" class="form-control" id="email2" readonly>
                                    </div>
                                    <div class="col-lg-1">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-1">
                                    </div>
                                    <div class="col-2 ">
                                    <button class="btn btn-danger" name="delete" >Delete account</button>
                                    </div>
                                    <div class="col-4">
                                    </div>
                                    <div class="col-2 ">
                                       <a href="..\Profiles\profile.php" class="btn btn-primary" >Back to profile</a>
                                    </div>
                                    <div class="col-lg-1">
                                    </div>

                                </div>

                            </form>
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