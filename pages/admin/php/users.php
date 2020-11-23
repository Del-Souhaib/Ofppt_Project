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
    $req="SELECT * FROM `user`  ";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$req)){
      echo '<script>alert("try again")</script>';
    }
    else{
        mysqli_stmt_execute($stmt);
        $res=mysqli_stmt_get_result($stmt);
        echo '
        <h2 class="mb-5">- Normal users</h2>
        <table  class="table table-striped">
         <thead>
        <tr>

      <th scope="col">Id</th>
      <th scope="col">Picture</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
      <th scope="col">Sexe</th>
      <th scope="col">Birthday</th>
      <th scope="col">Delete account</th>


       </tr>
        </thead >
     <tbody>
        ';
        while($row=mysqli_fetch_assoc($res)){
     echo '
     <tr>
       <td>'.$row['Id'].'</td>
       <td>'.$row['Picture'].'</td>
       <td>'.$row['First_Name'].'</td>
       <td>'.$row['Last_Name'].'</td>
        <td>'.$row['Email'].'</td>
       <td>'.$row['sexe'].'</td>
       <td>'.$row['Birthday'].'</td>
       <td><button class="btn btn-danger" onclick="deleteuser('.$row['Id'].')">Delete</button></td>

     </tr>
     ';
        }

      echo '
      </tbody>
     </table>

      ';

    }

    /////admins


    $req="SELECT * FROM `admins`  ";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$req)){
      echo '<script>alert("try again")</script>';
    }
    else{
        mysqli_stmt_execute($stmt);
        $res=mysqli_stmt_get_result($stmt);
        echo '
        <h2 class="mb-5 mt-5">- Admins</h2>
        <table  class="table table-striped">
         <thead>
        <tr>
      <th scope="col">Id</th>
      <th scope="col">Login</th>
      <th scope="col">Email</th>
    


       </tr>
        </thead>
     <tbody>
        ';
        while($row=mysqli_fetch_assoc($res)){
     echo '
     <tr>
       <td>'.$row['Id'].'</td>
       <td>'.$row['Name'].'</td>
        <td>'.$row['Email'].'</td>
  

     </tr>
     ';
        }

      echo '
      </tbody>
     </table>

      ';

    }
mysqli_close($con);
}

?>