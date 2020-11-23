<?php
session_start();
if (isset($_SESSION['admin'])) {
    if (isset($_POST['addproduct'])) {
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $database = 'school_project';
        $con = mysqli_connect($server, $user, $password, $database);

        if (!$con) {
            echo '<script>alert("Try again")</script>';
            exit();
        } else {

            $req2 = "SELECT * FROM `product` ORDER BY Id DESC LIMIT 1";
            $stmt2 = mysqli_stmt_init($con);
            mysqli_stmt_prepare($stmt2, $req2);
            mysqli_stmt_execute($stmt2);
            $res = mysqli_stmt_get_result($stmt2);
            $row = mysqli_fetch_assoc($res);
            $nbb = $row['Id'] + 1;

            $name = mysqli_real_escape_string($con, $_POST['name']);
            $Pet = mysqli_real_escape_string($con, $_POST['pet']);
            $Category = mysqli_real_escape_string($con, $_POST['category']);
            $Specification = mysqli_real_escape_string($con, $_POST['Specification']);
            $details = mysqli_real_escape_string($con, $_POST['details']);
            $Colors = mysqli_real_escape_string($con, $_POST['colors']);
            $Price = mysqli_real_escape_string($con, $_POST['price']);
            $words = mysqli_real_escape_string($con, $_POST['words']);
            // $Pictures = $_FILES['images'];
            $picname = $_FILES['images']['name'];
            $picurl = $_FILES['images']['tmp_name'];
            $pictype = $_FILES['images']['type'];
            $picsize = $_FILES['images']['size'];
            $correctypes = ['png', 'jpg', 'jpeg'];
            $nb = count($picname);

            $req = "INSERT INTO `product`(`name`, `Pet`, `Category`, `Specification`, `Details`, `Colors`,
            `Price`, `Pictures`, `words`)  VALUES(?,?,?,?,?,?,?,?,?)  ";
            $stmt = mysqli_stmt_init($con);
            if (!mysqli_stmt_prepare($stmt, $req)) {
                echo '<script>alert("try again")</script>';
            } else {
                for ($i = 0; $i < $nb; $i++) {
                    $type = @end(explode('.', $picname[$i]));
                    $picname[$i] = $nbb . $i . '.' . $type;
                    $allimages[] = $picname[$i];
                    move_uploaded_file($picurl[$i], $_SERVER['DOCUMENT_ROOT'] . '\Work\school project\images\store\products\\' . $picname[$i]);

                }
                $dbimages = implode('|', $allimages);
                mysqli_stmt_bind_param($stmt, 'ssssssdss', $name, $Pet, $Category, $Specification, $details, $Colors, $Price,
                    $dbimages, $words);
                mysqli_stmt_execute($stmt);
                $req2 = "SELECT * FROM `product` ORDER BY Id DESC LIMIT 1";
                $stmt2 = mysqli_stmt_init($con);
                mysqli_stmt_prepare($stmt2, $req2);
                mysqli_stmt_execute($stmt2);
                $res = mysqli_stmt_get_result($stmt2);
                $row = mysqli_fetch_assoc($res);

                header('Location:..\products\products.php');

            }
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

<div class="row ">
   <div class="col-12 mb-5">
      <h2 class="bigtitle">Add products</h2>
   </div>
   <div class="col-lg-1">
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="name">Product name</label>
   </div>
   <div class="col-lg-3 col-md-6 mb-5">
      <input type="text" placeholder="Enter product  name" required name="name" class="form-control" id="name">
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="pet">Product Pet</label>
   </div>
   <div class="col-lg-3 col-md-6 mb-5">
      <select name="pet" class="form-control">
         <option value="Dogs">Dogs</option>
         <option value="Cats">Cats</option>
         <option value="Birds">Birds</option>
         <option value="Fishes">Fishes</option>
         <option value="Hmasters">Hmasters</option>
         <option value="Horses">Horses</option>
         <option value="Other">Other</option>
      </select>
   </div>
   <div class="col-lg-1"></div>
</div>
<div class="row mb-5">
   <div class="col-lg-1 ">
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="category">Prodcut Category</label>
   </div>
   <div class="col-lg-3 col-md-6">
      <select name="category" class="form-control">
         <option value="food">Food</option>
         <option value="beds">Beds</option>
         <option value="Toys">Toys</option>
         <option value="Bowls">Bowls</option>
         <option value="Hmasters">Kennels</option>
         <option value="Horses">Glass bowl</option>
         <option value="Other">Other</option>
      </select>
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="colors">Product Colors</label>
   </div>
   <div class="col-lg-3 col-md-6">
      <input type="text" name="colors" placeholder="Red,Black,Green" class="form-control" id="colors">
   </div>
   <div class="col-lg-1 ">
   </div>
</div>
<div class="row mb-5">
   <div class="col-lg-1">
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="price">Price</label>
   </div>
   <div class="col-lg-3 col-md-6">
      <input type="text" name="price" required placeholder="Enter product price" class="form-control" id="price">
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="images">Product images</label>
   </div>
   <div class="col-lg-3 col-md-6">
      <input type="file" name="images[]" class="form-control-file" multiple="multiple" required id="images">
   </div>
   <div class="col-lg-1">
   </div>
</div>
<div class="row">
   <div class="col-lg-1">
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="Specification">Specification</label>
   </div>
   <div class="col-lg-3 col-md-6 mb-5">
      <textarea name="Specification" required placeholder="Write product Specification" class="form-control"
         id="Specification"></textarea>
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="words">Specific words</label>
   </div>
   <div class="col-lg-3 col-md-6">
      <textarea name="words" required placeholder="Write that client can reach th product" class="form-control"
         id="words"></textarea>
   </div>
   <div class=" col-lg-1">
   </div>
</div>
<div class="row mb-5">
   <div class="col-lg-1">
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="Specification">Details</label>
   </div>
   <div class="col-lg-8 col-md-7 mb-5">
      <textarea name="details" required placeholder="Write details" class="form-control"
         id="details"></textarea>
   </div>

   <div class=" col-lg-1">
   </div>
</div>
      <div class="row">
         <div class="col-lg-1">
         </div>
         <div class="col-lg-5 col-md-4">
            <button class="btn btn-success" name="addproduct" id="addproduct">Add product</button>
         </div>
         <div class="col-lg-5 col-md-4">
            <a href="..\products\products.php" class="btn btn-primary" name="back" id="back">Back to list</a>
         </div>
         <div class="col-lg-1">
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

} else {
    header('Location:..\gr\Admin_login.php');

}
?>