<?php
session_start();
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'school_project';
$con = mysqli_connect($server, $user, $password, $database);

$user5 = mysqli_real_escape_string($con, $_GET['user']);
$post = mysqli_real_escape_string($con, $_GET['post']);
$req = "SELECT * FROM `love_react` WHERE Id_Users=? and Id_Post=?";
$stmt = mysqli_stmt_init($con);
mysqli_stmt_prepare($stmt, $req);
mysqli_stmt_bind_param($stmt, 'ii', $user5, $post);
mysqli_execute($stmt);
$res=mysqli_stmt_get_result($stmt);
if(mysqli_fetch_assoc($res)){
 $req = "DELETE FROM `love_react` WHERE Id_Users=? and Id_Post=?";
    $stmt = mysqli_stmt_init($con);
    mysqli_stmt_prepare($stmt, $req);
    mysqli_stmt_bind_param($stmt, 'ii', $user5, $post);
    mysqli_execute($stmt);
    echo false;
}
else if(!mysqli_fetch_assoc($res)){
    $req = "INSERT INTO `love_react`(`Id_Users`, `Id_Post`) VALUES (?,?)";
    $stmt = mysqli_stmt_init($con);
    mysqli_stmt_prepare($stmt, $req);
    mysqli_stmt_bind_param($stmt, 'ii', $user5, $post);
    mysqli_execute($stmt);
    echo true;

}
mysqli_close($con);

?>
   
    
  


