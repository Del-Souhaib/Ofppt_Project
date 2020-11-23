<?php
function posts()
{
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);

    if (!$con) {
        echo '<script>alert("Try again")</script>';
        exit();
    } else {
        $req = "SELECT user.Id as userid,user.First_Name,user.Last_Name,post.Id as postid,post.Text,post.File,
        post.Date FROM `post`inner JOIN user on post.Id_User=user.Id  ";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("try again")</script>';
        } else {
            mysqli_stmt_execute($stmt);
            $res = mysqli_stmt_get_result($stmt);
            echo '
            <form method="post">
            <table class="table">
             <thead>
            <tr>
          <th scope="col">User id</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Post Id </th>
          <th scope="col">Post content</th>
          <th scope="col">Post File</th>
          <th scope="col">Post Date</th>
          <th scope="col">Settings</th>

           </tr>
            </thead>
         <tbody>
            ';
            while ($row = mysqli_fetch_assoc($res)) {
                //  $postid=$row['postid'];

                echo '
         <tr>
           <td>' . $row['userid'] . '</td>
           <td>' . $row['First_Name'] . '</td>
           <td>' . $row['Last_Name'] . '</td>
           <td>' . $row['postid'] . '</td>
           <td>' . $row['Text'] . '</td>
           <td>' . $row['File'] . '</td>
           <td>' . $row['Date'] . '</td>
           <td> <button class="btn btn-danger" onclick="deletepost(' . $row['postid'] . ')" name="delete">Delete</button></td>


         </tr>
         ';
            }

            echo '
          </tbody>
         </table>

    </form>
    <button class="btn btn-danger mt-5" onclick="deleteallposts()">Delete All posts</button>

          ';

        }
        mysqli_close($con);
    }

}
posts();
