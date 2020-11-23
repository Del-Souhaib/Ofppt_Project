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
    //delete reacts
    $req="DELETE FROM `love_react` ";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$req)){
      echo '<script>alert("try again")</script>';
    }
    else{
        if(!mysqli_stmt_execute($stmt)){
            echo '<script>alert("try again 3")</script>';
        }
        else{
            echo '<script>alert("Message deleted")</script>';
        }
    }
  

    //delete post
    $req="DELETE FROM `post` ";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$req)){
      echo '<script>alert("try again")</script>';
    }
    else{
        if(!mysqli_stmt_execute($stmt)){
            echo '<script>alert("try again 3")</script>';
        }
        else{
            echo '<script>alert("Message deleted")</script>';
        }
    }
  //  echo mysqli_error($con);
    mysqli_close($con);
}

?>