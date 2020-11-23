<?php
session_start();
if (isset($_POST['send1'])) {
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';

    $fullname1 = $_POST['fullname1'];
    $email1 = $_POST['email1'];
    $messageContent1 = 'Normal';
    $message1 = $_POST['message1'];
    $date = date('y-m-d H:i:s');
    $phone = '';
    $adresse = '';
    $con = mysqli_connect($server, $user, $password, $database);
    if (!$con) {
        echo '<script>alert("Try againe")</script>';
    } else {
        $req = "INSERT INTO `message`(`Full_Name`, `Email`, `Phone_Number`, `Adresse`, `Message_Content`,
         `Message`, `Date`) VALUES (?,?,?,?,?,?,?)";

        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("Try againe")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'sssssss', $fullname1, $email1, $phone, $adresse, $messageContent1, $message1, $date);
            if (mysqli_execute($stmt)) {
                echo '<script>alert("message sent")</script>';
            } else {
                echo '<script>alert("Try againe2")</script>';

            }

        }
    }
}
if (isset($_POST['send2'])) {
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'school_project';

    $fullname2 = $_POST['name2'];
    $email2 = $_POST['email2'];
    $messageContent2 = 'Urgent';
    $message2 = $_POST['message2'];
    $date2 = date('y-m-d H:i:s');
    $phone = $_POST['phonenumber'];
    $adresse = $_POST['adresse'];
    $con = mysqli_connect($server, $user, $password, $database);
    if (!$con) {
        echo '<script>alert("Try againe")</script>';
    } else {
        $req = "INSERT INTO `message`(`Full_Name`, `Email`, `Phone_Number`, `Adresse`, `Message_Content`,
        `Message`, `Date`) VALUES (?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $req)) {
            echo '<script>alert("Try againe")</script>';
        } else {
            mysqli_stmt_bind_param($stmt, 'sssssss', $fullname2, $email2, $phone, $adresse, $messageContent2, $message2, $date2);
            if (mysqli_stmt_execute($stmt)) {
                echo '<script>alert("Message sent")</script>';
            } else {
                echo '<script>alert("Try againe")</script>';

            }

        }
    }

}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/contact.css">
    <title>Contact</title>
</head>

<body>
    <header>
        <nav class="sticky-top">

            <ul id="menue" class="sticky-top">
                <li class="logo "> <a href="index.php"><img src="../images/logo.svg" alt="" id="imglogo"
                            height="60px"></a>
                </li>
                <li class="toggle d-flex align-items-center"> <img src="../images/Icons/toggle.png" id="toggle" alt="" width="40" height="40">
                </li>
                <a class="item " href="../index.php">
                    <li>Home </li>
                </a>
                <a class="item " href="../pages/aboutus.php">
                    <li>Our story</li>
                </a>
                <a class="item" href="../pages/services.php">
                    <li>Our services</li>
                </a>
                <a class="item" href="../pages/store.php">
                    <li>Store</li>
                </a>
                <a class="item" href="../pages/community.php">
                    <li> Community</li>
                </a>
                <a class="item active" href="../pages/contact.php">
                    <li>Contact</li>
                </a>
                <?php
if (isset($_SESSION['id'])) {
    echo '
    <a class="item" href="..\pages\mycarts.php">
    <img src="../images\Icons\Carts.png" width="50" height="50">
</a>
';
} else {
    echo '
               <li class="item button">
                    <a href="..\pages\Login.php">
                        <button type="submit" class="btn btn-primary">Join us</button>
                    </a>
                </li>';
}

?>
            </ul>
        </nav>

    </header>
    <main>
        <div class="container-fluid block1">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="bigtitle">Contact us</h1><br><br>
                </div>
            </div>
            <div class="row contacts mb-5">

                <div class="col-lg-6 phone">
                    <div class="row">
                        <div class="col-12">
                            <h4>- Contact us by our number :</h4>
                        </div>
                        <div class="col-sm-4 text-center">
                            <img src="../images/contact/pic1.png" class="pic" alt="">
                            <h5 id="number"> +212684019181</h5>

                        </div>
                        <div class="col-sm-8">
                            <p>You can call us to ask us or give a A complaint or if you need something from our
                                services,
                                our customers services is open 7d/7d from 8:00 am to 7:00pm .
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 mail">
                    <div class="row">
                        <div class="col-12">
                            <h4>- Contact us by sending mail :</h4>
                        </div>
                        <div class="col-sm-4 text-center">
                            <img src="../images/contact/pic2.png" class="pic" alt="">
                            <h5>Souhaib2.Allout@gmail.com</h5>

                        </div>
                        <div class="col-sm-8">
                            <p>You can send mail to us and we will receive it soon as possible and reply</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row contacts">
                <div class="col-12">
                    <h4>- Contact us by sending message here :</h4>
                </div>
                <a href="" class="col-sm-4 col-md-3 text-center">
                    <img src="../images/contact/pic3.png" class="pic" alt="">
                </a>
                <div class="col-sm-8 col-md-9">
                    <p>You can send your message on our website anytime you want and we will receive it and reply to
                        your message soon as possible</p>
                    <button id="sendmessage">Send message</button>

                </div>
            </div>
        </div>
        <form class="container" id="forms1"  action="#" method="post">

            <div class="row">
                <div class="col-md-4">
                    <label for="option">Selecet message content :</label>
                </div>
                <div class="col-md-8 mb-4">

                    <select  name="mssgcontent1" id="option" class="form-control">
                        <option value="choice0"> </option>
                        <option value="choice1"> Our services</option>
                        <option value="choice2">Asking for advice</option>
                        <option value="choice3">Save an animal</option>
                        <option value="choice4">other ..</option>
                    </select>

                </div>
            </div>
        </form>
        <form class="container" id="forms2" method="post">
            <div class="row ">
                <div class="col-md-4 col-lg-2">
                    <label for="name">Full name</label>
                </div>
                <div class="col-md-8 col-lg-4 mb-4">
                    <input type="text" class="form-control" name="fullname1" id="fullname" placeholder="Write you name">
                </div>
                <div class="col-md-4 col-lg-2">
                    <label for="email">Email</label>
                </div>
                <div class="col-md-8 col-lg-4 mb-4">
                    <input type="text" class="form-control" name="email1" id="email1" placeholder="name@example.com">
                </div>
                <div class="col-md-4 col-lg-2">
                    <label for="message1">Message </label>
                </div>
                <div class="col-md-8 col-lg-8 mb-4">
                    <textarea class="form-control" id="message1" name="message1" rows="3"></textarea>
                </div>
                <div class="col-12">
                    <p id="error1"></p>
                    <p id="error2"></p>
                    <p id="error3"></p>
                </div>
                <div class="col-12">
                    <button id="send1" name="send1" disabled>Send message</button>
                </div>

            </div>
        </form>
        <form class="container" id="forms3" method="post">
            <div class="row">
                <div class="col-md-4 col-lg-2">
                    <label for="name2">Full name</label>
                </div>
                <div class="col-md-8 col-lg-4 mb-4">
                    <input type="text" class="form-control"  name="name2" id="fullname2" placeholder="Write you name">
                </div>
                <div class="col-md-4 col-lg-2">
                    <label for="email2">Email</label>
                </div>
                <div class="col-md-8 col-lg-4 mb-4">
                    <input type="text" class="form-control" name="email2" id="email2" placeholder="Write your email">
                </div>
                <div class="col-md-4 col-lg-2">
                    <label for="number">Phone number </label>
                </div>
                <div class="col-md-8 col-lg-4 mb-4">
                    <input type="text" class="form-control" name="phonenumber" id="phone" placeholder="write your phone number">
                </div>
                <div class="col-md-4 col-lg-2">
                    <label for="adresse">Write adresse </label>
                </div>
                <div class="col-md-8 col-lg-4 mb-4">
                    <input type="text" class="form-control" name="adresse" id="adresse" placeholder="write adresse">
                </div>
                <div class="col-md-4 col-lg-2">
                    <label for="message2">Message </label>
                </div>
                <div class="col-md-8 col-lg-8 mb-4">
                    <textarea class="form-control" name="message2" id="message2" rows="3"></textarea>
                </div>
                <div class="col-12">
                    <p id="error4"></p>
                    <p id="error5"></p>
                    <p id="error6"></p>
                    <p id="error7"></p>
                    <p id="error8"></p>

                </div>
                <div class="col-12">
                    <button id="send2" name="send2" disabled>Send message</button>
                </div>
            </div>
        </form>
    </main>




    <footer>
        <div class="container-fluid">
            <div class="row text-center">
                <div class=" col-md-4">
                    <p class="tmplt">This Template made by Souhaib & Radouan</p>

                </div>
                <div class="col-md-8">
                    Follow us :
                    <a href="https://www.facebook.com/Del.Souhaib"><img src="../images/Social media/facebook.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href="https://www.linkedin.com/in/souhaib-allout/"><img src="../images/Social media/linkedin.png" class="social" class="social" width="50px"
                            height="50px" alt=""></a>
                    <a href=""> <img src="../images/Social media/google.png" class="social" width="50px" height="50px"
                            alt=""></a>
                </div>
            </div>
        </div>
    </footer>



    <script src="../javascript/contact.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</body>

</html>