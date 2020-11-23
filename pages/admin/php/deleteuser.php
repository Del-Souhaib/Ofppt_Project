<?php 
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'school_project';
$con = mysqli_connect($server, $user, $password, $database);

$id=$_GET['userid'];

if (!$con) {
    echo '<script>alert("Try again")</script>';
    exit();
} else {
    //delete reacts
    $req="DELETE FROM `love_react` WHERE Id_Users=? ";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$req)){
      echo '<script>alert("try again")</script>';
    }
    else{
        mysqli_stmt_bind_param($stmt,'i',$id);
        if(!mysqli_stmt_execute($stmt)){
            echo '<script>alert("try again 3")</script>';
        }
        else{
            echo '<script>alert("Message deleted")</script>';
        }
    }
  //delete posts reacts
  $req="SELECT  * FROM post  where Id_User=? ";
  $stmt=mysqli_stmt_init($con);
  if(!mysqli_stmt_prepare($stmt,$req)){
    echo '<script>alert("try again")</script>';
  }
  else{
      mysqli_stmt_bind_param($stmt,'i',$id);
      if(!mysqli_stmt_execute($stmt)){
          echo '<script>alert("try again 3")</script>';
      }
      else{
          $res=mysqli_stmt_get_result($stmt);
          while($row=mysqli_fetch_assoc($res)){
               $req2="delete FROM love_react WHERE Id_Post=? ";
               $stmt2=mysqli_stmt_init($con);
                mysqli_stmt_prepare($stmt2,$req2);
                mysqli_stmt_bind_param($stmt2,'i',$row['Id']);
                mysqli_stmt_execute($stmt2);
          }
      
      }
  }



    //delete post
    $req="DELETE FROM `post` WHERE Id_User=? ";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$req)){
      echo '<script>alert("try again")</script>';
    }
    else{
       mysqli_stmt_bind_param($stmt,'i',$id);
        if(!mysqli_stmt_execute($stmt)){
            echo '<script>alert("try again 3")</script>';
        }
        else{
            echo '<script>alert("Message deleted")</script>';
        }
    }

//delete admin
$req="DELETE FROM `admins` WHERE Id=? ";
$stmt=mysqli_stmt_init($con);
if(!mysqli_stmt_prepare($stmt,$req)){
  echo '<script>alert("try again")</script>';
}
else{
    mysqli_stmt_bind_param($stmt,'i',$id);
    if(!mysqli_stmt_execute($stmt)){
        echo '<script>alert("try again 3")</script>';
    }
    else{
        echo '<script>alert("Message deleted")</script>';
    }
}
//delete user
$req="DELETE  FROM `user`  WHERE Id=? ";
$stmt=mysqli_stmt_init($con);
if(!mysqli_stmt_prepare($stmt,$req)){
  echo '<script>alert("try again")</script>';
}
else{
    mysqli_stmt_bind_param($stmt,'i',$id);
    if(!mysqli_stmt_execute($stmt)){
        echo '<script>alert("try again 3")</script>';
    }
    else{
        echo '<script>alert("Message deleted")</script>';
    }
}
session_destroy();

  //  echo mysqli_error($con);
    mysqli_close($con);
}

?>