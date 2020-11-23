<?php
 if(isset($_POST['signin'])){
    $server='localhost';
    $user='root';
    $password='';
    $database='school_project';
    $con=mysqli_connect($server,$user,$password,$database);
    if(!$con){
        echo'<script>alert("Try again")</script>';
    }
    else{
       $login=$_POST['login'];
       $password0=$_POST['password0'];
       $req='SELECT * FROM `user` where Email like ?';
       $stmt=mysqli_stmt_init($con);
       if(!mysqli_stmt_prepare($stmt,$req)){
           echo '<script>alert("Try againe")</script>';
        }
       else{
           mysqli_stmt_bind_param($stmt,'s',$login);
           if(!mysqli_stmt_execute($stmt)){
              echo '<script>alert("Try againe 2")</script>';
           }
           else{
               $res=mysqli_stmt_get_result($stmt);
               if($row=mysqli_fetch_assoc($res)){
                  $test=password_verify($password0,$row['Password']);

                   if($test==false){
                  
                     echo '<script>alert("Password inccorect")</script>';
                   }
                   else{
                       $_SESSION['id']=$row['Id'];
                       
                       header('Location:community.php?welcome');
                   }

               }
               else{
                 echo '<script>alert("Email Inccorect")</script>';
               }
           }
       }
    }
    mysqli_close($con);

}

?>