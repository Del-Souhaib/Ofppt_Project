<?php
session_start();

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
<form method="post" >
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
            <input type="text" require value="<?php echo $row['Name']; ?>" placeholder="Enter your first name" name="name" class="form-control" id="firstname">
        </div>
        <div class="col-lg-2 col-md-4">
            <label for="email2">Email</label>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <input type="email" require value="<?php echo $row['Email'] ?>" name="email" placeholder="Enter your email" class="form-control" id="email2">
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
            <input type="password" require name="password1" placeholder="Enter a password" class="form-control" id="password2">
        </div>
        <div class="col-lg-2 col-md-4">
            <label for="password3">Valid password</label>
        </div>
        <div class="col-lg-3 col-md-6">
            <input type="password" require name="password2" placeholder="Enter password again" class="form-control"
                id="password3">
        </div>
        <div class=" col-lg-1">
        </div>
    </div>
    <div class="row">
        <div class="col-lg-1">

        </div>
        <div class="col-2 ">
            <button class="btn btn-primary" name="saveprofile"  id="save" >Save</button><br><br>

        </div>

        <div class="col-4">

        </div>
        <div class="col-2 ">
            <button class="btn btn-danger" name="deleteaccount"  id="deleteaccount" >Delete account</button><br><br>
        </div>
        <div class="col-lg-1">

        </div>

    </div>

    </form>
<?php

    }

    mysqli_close($con);
}
?>