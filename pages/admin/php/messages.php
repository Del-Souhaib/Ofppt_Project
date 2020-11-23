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
    $req="SELECT * FROM `message` ";
    $stmt=mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$req)){
      echo '<script>alert("try again")</script>';
    }
    else{
        mysqli_stmt_execute($stmt);
        $res=mysqli_stmt_get_result($stmt);
        echo '
        <table  class="table table-striped">
         <thead>
        <tr>
      <th scope="col">Message Id</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone number</th>
      <th scope="col">Adresse</th>
      <th scope="col">Message content</th>
      <th scope="col">Message</th>
      <th scope="col">Date</th>
      <th scope="col">Delete account</th>

       </tr>
        </thead>
     <tbody>
        ';
        while($row=mysqli_fetch_assoc($res)){
     echo '
     <tr>
       <td>'.$row['Id'].'</td>
       <td>'.$row['Full_Name'].'</td>
       <td>'.$row['Email'].'</td>
       <td>'.$row['Phone_Number'].'</td>
       <td>'.$row['Adresse'].'</td>
       <td>'.$row['Message_Content'].'</td>
       <td>'.$row['Message'].'</td>
       <td>'.$row['Date'].'</td>
       <td><button class="btn btn-danger" onclick="deletemessage('.$row['Id'].')">Delete</button></td>

     </tr>
     ';
        }

      echo '
      </tbody>
     </table>
     <button class="btn btn-danger mt-5" onclick="deleteallmessages()">Delete All messages</button>

      ';

    }
mysqli_close($con);
}

?>