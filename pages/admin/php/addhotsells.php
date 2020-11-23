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
           <div class="col-10">
              <button class="btn btn-primary" name="addhotsell" id="addhotsell" >Add this product as hot sell</button><br><br>
           </div>
           <div class="col-2">
           </div>
        </div>
        ';

    }
}
