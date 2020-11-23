<?php
 $server = 'localhost';
 $user = 'root';
 $password = '';
 $database = 'school_project';
 $con = mysqli_connect($server, $user, $password, $database);
 if (!$con) {
     echo '<script>alert("Try again")</script>';
 } else {
     $id = $_SESSION['id'];
     $req = "SELECT * FROM `user` WHERE Id=?";
     $stmt = mysqli_stmt_init($con);
     if (!mysqli_stmt_prepare($stmt, $req)) {
         echo '<script>alert("Try again 2")</script>';
     } else {
         mysqli_stmt_bind_param($stmt, 'i', $id);
         mysqli_stmt_execute($stmt);
         $res = mysqli_stmt_get_result($stmt);
         if (!$row = mysqli_fetch_assoc($res)) {
             echo '<script>alert("Try again 3")</script>';
         }
     }
     mysqli_close($con);
 }

?>