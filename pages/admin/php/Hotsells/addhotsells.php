<?php
session_start();
if (isset($_SESSION['admin'])) {

    if (isset($_POST['addhotsell'])) {
        $id = $_POST['selecthotsell'];

        $server = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'school_project';
        $con = mysqli_connect($server, $user, $password, $database);

        if (!$con) {
            echo '<script>alert("Try again")</script>';
            exit();
        } else {

            $req = "INSERT INTO `hot_sells`(`id_product`) VALUES(?)  ";
            $stmt = mysqli_stmt_init($con);
            if (!mysqli_stmt_prepare($stmt, $req)) {
                echo '<script>alert("try again")</script>';
            } else {
                mysqli_stmt_bind_param($stmt, 'i', $id);
                mysqli_stmt_execute($stmt);
                header('Location:./hotsells.php');
            }
            echo mysqli_error($con);
            mysqli_close($con);
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
              <li class="togglecm text-right"> <img src="toggle.png" id="togglecm" alt="" width="40" height="40">
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
$server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);

    if (!$con) {
        echo '<script>alert("Try again")</script>';
        exit();
    } else {
        $req = "SELECT * FROM `product`  ";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("try again")</script>';
        } else {
            mysqli_stmt_execute($stmt);
            $res = mysqli_stmt_get_result($stmt);
            echo '
        <div class="row mb-5">
           <div class="col-2"></div>
           <div class="col-3">
                <p>Product name</p>
            </div>
            <div class="col-5">
                <select class="form-control" name="selecthotsell">
              ';
            while ($row = mysqli_fetch_assoc($res)) {
                echo '
              <option value="' . $row['Id'] . '">' . $row['name'] . '</option>
              ';
            }
            echo '
           </select>
           <div class="col-2"></div>
        </div>
        </div>
        <div class="row mt-5">
           <div class="col-2">
           </div>
           <div class="col-5">
              <button class="btn btn-success" name="addhotsell" id="addhotsell" >Set this product as hot sell</button><br><br>
           </div>
           <div class="col-5">
           <a href="./hotsells.php" class="btn btn-primary" name="addhotsell" id="addhotsell" >Back to list</a>
        </div>

        </div>
        ';

        }
    }
    ?>
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
} else {
    header('Location:..\gr\Admin_login.php');
}
?>