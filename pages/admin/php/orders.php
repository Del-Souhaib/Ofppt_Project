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
    $req = "SELECT * FROM `order`  ";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $req)) {
        echo '<script>alert("try again")</script>';
    } else {
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        echo '
        <table  class="table table-striped">
         <thead>
        <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Id</th>
      <th scope="col">Color</th>
      <th scope="col">Price</th>
      <th scope="col">Qte</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone number</th>
      <th scope="col">City</th>
      <th scope="col">Adresse</th>
      <th scope="col">Commande Date</th>


       </tr>
        </thead>
     <tbody>
        ';
        while ($row = mysqli_fetch_assoc($res)) {
            echo '
     <tr>
       <td>' . $row['id'] . '</td>
       <td>' . $row['Id_Product'] . '</td>
       <td>' . $row['color'] . '</td>
       <td>' . $row['price'] . '</td>
       <td>' . $row['qte'] . '</td>
       <td>' . $row['First_Name'] . ' ' . $row['Last_Name'] . '</td>
       <td>' . $row['Email'] . '</td>
       <td>' . $row['Phone_Number'] . '</td>
       <td>' . $row['City'] . '</td>
       <td>' . $row['Adresse1'] . ' ' . $row['Adresse2'] . '</td>
       <td>' . $row['Date'] . '</td>
       <td><button class="btn btn-danger" onclick="deleteuser(' . $row['id'] . ')">Delete</button></td>

     </tr>
     ';
        }

        echo '
      </tbody>
     </table>
     <button class="btn btn-danger mt-5" onclick="deleteallmessages()">Delete All orders</button>

      ';

    }
    mysqli_close($con);
}
