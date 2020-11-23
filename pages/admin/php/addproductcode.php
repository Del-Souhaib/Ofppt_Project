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
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $Pet = mysqli_real_escape_string($con, $_POST['pet']);
    $Category = mysqli_real_escape_string($con, $_POST['category']);
    $Specification = mysqli_real_escape_string($con, $_POST['Specification']);
    $Colors = mysqli_real_escape_string($con, $_POST['colors']);
    $Price = mysqli_real_escape_string($con, $_POST['price']);
    $Pictures = mysqli_real_escape_string($con, $_POST['images']);
    $words = mysqli_real_escape_string($con, $_POST['words']);
    $req = "INSERT INTO `product`(`name`, `Pet`, `Category`, `Specification`, `Colors`, `Price`,
         `Pictures`, `words`) VALUES(?,?,?,?,?,?,?,?)  ";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $req)) {
        echo '<script>alert("try again")</script>';
    } else {
        mysqli_stmt_bind_param($stmt, 'sssssdss', $name, $Pet, $Category, $Specification, $Colors, $Price,
            $Pictures, $words);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
    }
    echo mysqli_error($con);
    mysqli_close($con);
}
