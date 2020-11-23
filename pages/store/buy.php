<?php
session_start();

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'school_project';
$con = mysqli_connect($server, $user, $password, $database);
if (!$con) {
    echo '<script>alert("Try again")</script>';
} else {
    $productid = mysqli_real_escape_string($con, 1);
    $color = mysqli_real_escape_string($con, $_POST['color']);
    $price = mysqli_real_escape_string($con, $_COOKIE['price']);
    $qte = mysqli_real_escape_string($con, $_POST['qte']);
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $phonenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $city = mysqli_real_escape_string($con, $_POST['cityname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $adresse1 = mysqli_real_escape_string($con, $_POST['adresse1']);
    $adresse2 = mysqli_real_escape_string($con, $_POST['adresse2']);
    $Date = mysqli_real_escape_string($con, date('y-m-d h:i:s'));

    $req = "INSERT INTO `order`(`Id_Product`,`color`, `price`, `qte`, `First_Name`, `Last_Name`, `Phone_Number`, `City`, `Email`,
`Adresse1`, `Adresse2`, `Date`) VALUES (?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $req)) {
        echo '<script>alert("Try again 2")</script>';
    } else {
        mysqli_stmt_bind_param($stmt, 'issssssss', $productid, $firstname, $lastname, $phonenumber,
            $city, $email, $adresse1, $adresse2, $Date);
        if (!mysqli_stmt_execute($stmt)) {
            echo '<script>alert("Try again 3")</script>';
        } else {
            echo '<script>alert("operation complete")</script>';
        }
    }
}
