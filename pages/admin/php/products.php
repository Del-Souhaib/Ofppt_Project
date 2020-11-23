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
    $req = "SELECT * FROM `product`  ";
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
      <th scope="col">Name</th>
      <th scope="col">Pet</th>
      <th scope="col">Category</th>
      <th scope="col">Specification</th>
      <th scope="col">Colors</th>
      <th scope="col">words</th>
      <th scope="col">Pictures</th>
      <th scope="col">Price</th>



       </tr>
        </thead>
     <tbody>
        ';
        while ($row = mysqli_fetch_assoc($res)) {
            echo '
     <tr>
       <td>' . $row['Id'] . '</td>
       <td>' . $row['name'] . '</td>
       <td>' . $row['Pet'] . '</td>
       <td>' . $row['Category'] . '</td>
       <td>' . $row['Specification'] . '</td>
       <td>' . $row['Colors'] . '</td>
       <td>' . $row['words'] . '</td>
       <td>' . $row['Pictures'] . '</td>
       <td>' . $row['Price'] . '</td>
       <td><button class="btn btn-danger" onclick="deleteproduct(' . $row['Id'] . ')">Delete</button></td>
     </tr>
     ';
        }

        echo '
      </tbody>
     </table>
     <button class="btn btn-danger mt-5" onclick="deleteallproducts()">Delete All products</button>

      ';

    }
    mysqli_close($con);
}
