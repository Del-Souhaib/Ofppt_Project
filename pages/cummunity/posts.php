<?php
session_start();

function posts()
{
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';
    $con = mysqli_connect($server, $user, $password, $database);
    $req = "SELECT  post.Id as Postid,post.Text,post.File,post.Date,user.First_Name, user.Last_Name,user.Picture FROM user inner JOIN post  WHERE post.Id_User=user.Id  ORDER BY post.Date DESC ";
    $stmt = mysqli_stmt_init($con);
    //  $par='user.Id';
    if (!mysqli_stmt_prepare($stmt, $req)) {
        echo '<script>alert("Try again 2")</script>';
    } else {
        //  mysqli_stmt_bind_param($stmt,'s',$par);
        mysqli_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
        while ($row = mysqli_fetch_assoc($res)) {
            $user0 = mysqli_real_escape_string($con, $_SESSION['id']);
            $post0 = mysqli_real_escape_string($con, $row['Postid']);
            /*like number**/

            $req3 = "SELECT count(Id) as 'like' FROM `love_react` WHERE Id_Post=?";
            $stmt3 = mysqli_stmt_init($con);

            if (!mysqli_stmt_prepare($stmt3, $req3)) {
                echo '<script>alert("requet error")</script>';
            } else {
                mysqli_stmt_bind_param($stmt3, 'i', $post0);
                if (!mysqli_stmt_execute($stmt3)) {
                    echo '<script>alert("Try again")</script>';

                } else {
                    $res3 = mysqli_stmt_get_result($stmt3);
                    $likenumber = mysqli_fetch_assoc($res3);

                }
            }

            echo '
                 <div class="cards" >
                    <div class="card mb-3">
                        <div class="card-body body1">
                            <img src="../images/community/Profiles/' . $row['Picture'] . '" width="70" height="70" alt=""  class="pdf">
                            <h5 class="card-title">' . $row['First_Name'] . ' ' . $row['Last_Name'] . '</h5>

                        </div>';
            if (!empty($row['File'])) {
                $expd = explode('.', $row['File']);
                $img = strtolower(end($expd));

                echo '<img src="../images/community/posts/' . $row['Postid'] . '.' . $img . '" class="card-img-top postimg" alt="...">';
            }
            echo '<div class="card-body body2">
                                <p class="card-text">' . $row['Text'] . '</p>
                                <p class="card-text"><small class="text-muted">' . $row['Date'] . '</small></p>
                                <form method="post" id="lovereact">';

            $req2 = "SELECT * FROM `love_react` WHERE Id_Users=$user0 and Id_Post=$post0";
            $stmt2 = mysqli_stmt_init($con);

            if (!mysqli_stmt_prepare($stmt2, $req2)) {
                echo '<script>alert("requet error")</script>';
            } else {
                if (!mysqli_stmt_execute($stmt2)) {
                    echo '<script>alert("' . mysqli_error($con) . '")</script>';

                } else {
                    $res2 = mysqli_stmt_get_result($stmt2);

                    if (mysqli_fetch_assoc($res2) == 0) {
                        if ($likenumber['like'] == 0) {
                            echo '<p id="like' . $post0 . '">0 </p>
                                  <img src="../images/Icons/love2.svg" name="love"  id="post' . $post0 . '" class="like"
                                   width="50" height="50" alt="" onclick="react(';
                            echo $user0 . ',' . $post0 . ')"> ';
                        } else if ($likenumber['like'] > 0) {
                            echo '<p id="like' . $post0 . '">' . $likenumber['like'] . '  </p>
                                  <img src="../images/Icons/love2.svg" name="love" id="post' . $post0 . '" class="like"
                                  width="50" height="50" alt="" onclick="react(';
                            echo $user0 . ',' . $post0 . ')"> ';
                        }

                    } else {
                        if ($likenumber['like'] == 0) {
                            echo '<p  id="like' . $post0 . '">0 </p>
                                  <img src="../images/Icons/love.svg" name="love" id="post' . $post0 . '" class="like"
                                   width="50" height="50" alt="" onclick="react(';
                            echo $user0 . ',' . $post0 . ')"> ';
                        } else if ($likenumber['like'] > 0) {
                            echo '<p id="like' . $post0 . '" id="like' . $post0 . '">' . $likenumber['like'] . '  </p>
                                  <img src="../images/Icons/love.svg"  name="love" id="post' . $post0 . '" class="like"
                                  width="50" height="50" alt="" onclick="react(';
                            echo $user0 . ',' . $post0 . ')"> ';
                        }

                    }
                    echo '</form>
                        </div>
                         </div>
                            </div>';
                }

            }

        }
    }

}

posts();
