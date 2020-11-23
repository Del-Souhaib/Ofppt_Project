<?php
session_start();
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
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/aboutus.css">

    <title>Our story</title>
</head>

<body>
    <header>
        <nav class="sticky-top">

            <ul id="menue" class="sticky-top">
                <li class="logo"> <a href="index.php"><img src="../images/logo.svg" alt="" id="imglogo"
                            height="60px"></a>
                </li>
                <li class="toggle d-flex align-items-center"> <img src="../images/Icons/toggle.png" id="toggle" alt="" width="40" height="40">
                </li>
                <a class="item" href="../index.php">
                    <li>Home </li>
                </a>
                <a class="item active" href="../pages/aboutus.php">
                    <li>Our story</li>
                </a>
                <a class="item" href="../pages/services.php">
                    <li>Our services</li>
                </a>
                <a class="item" href="../pages/store.php">
                    <li>Store</li>
                </a>
                <a class="item" href="../pages/community.php">
                    <li> community</li>
                </a>
                <a class="item" href="../pages/contact.php">
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

        <h1 class="title ">Our story</h1>
    </header>
    <main>
        <div class="container-fluid block1">
            <div class="row ">
                <div class="col-12">
                    <h2 class="bigtitle">Dates</h2>
                </div>
            </div>
            <br>
            <div class="row  text-center">

                <div class="col-12">
                    <img src="../images/Icons/left.svg" width="50" height="50" id="left" alt="">

                    <img src="../images/story/pic1.png" id="sliderpic" class="img-fluid" alt="">
                    <img src="../images/Icons/right.svg" width="50" height="50" id="right" alt="">

                </div>

                <div class="col-12  poits">
                    <img src="../images/Icons/poit2.png" class="poit" width="30px" height="30px" alt="">
                    <img src="../images/Icons/poit1.png" class="poit" width="20px" height="20px" alt="">
                    <img src="../images/Icons/poit1.png" class="poit" width="20px" height="20px" alt="">
                    <img src="../images/Icons/poit1.png" class="poit" width="20px" height="20px" alt="">
                    <img src="../images/Icons/poit1.png" class="poit" width="20px" height="20px" alt="">
                </div>
                <div class="col-12  dates">
                    <p class="date">2008</p>
                    <p class="date">2011</p>
                    <p class="date">2014</p>
                    <p class="date">2016</p>
                    <p class="date">2019</p>

                </div>
            </div>


        </div>
        <div class="container-fluid block2">
            <div class="row ">
                <div class="col-12">
                    <h2 class="bigtitle">What is Del organisation for animals?</h2><br>

                </div>
                <div class="col-md-5 text-center">

                    <img src="../images/story/item3.jpg" width="300px" height="400px" alt="">
                </div>
                <div class="col-md-7">
                    <p><br>A global animal rights group founded by Souhaib Allout and Soumer Radouan that help and save
                        animals and pets from the risks .Del organisation started on Marrakech city,Morocco and now it
                        have so many sections for example Rabat , Casablanca, Tanger , Dakhla ,Agadir ,El jadida and
                        more ,and soon our organisation will avaible on others arabic countries for example Algeria and
                        Tunis.

                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid block3">

            <div class="row">
                <div class="col-md-7">
                    <h2 class="bigtitle">Goals of this organisation</h2><br>
                    <p>Del organisation for animals have so many goals for example :
                        <li>Protect animals from all the risk</li>
                        <li>Save animals rights</li>
                        <li>Give advices to our custumors</li>
                        <li>Take animals from street and and give it to new families and people
                        </li>
                        <li>Take animals </li>
                        <li>Make comunnity to share our stories and picutres with others</li>
                        <li>Sell animals products (food,clothes...)</li>
                        <li>Make medical operations to animals</li><br>
                        </ul>

                    </p>
                </div>
                <div class="col-md-5 text-center">
                    <img src="../images/story/item2.jpg" width="300px" height="400px" alt="">
                </div>
            </div>

        </div>
        <div class="container-fluid block4">

            <div class="row ">
                <div class="col-12">
                    <h2 class="bigtitle">Our team</h2><br>
                </div>
            </div>
            <div class="row text-center officers">
                <div class="col-lg-3 col-md-4 col-sm-6 officer">
                    <img src="../images/story/founder1.png" width="200" height="200" class="officer" alt="">
                    <h4>Allout Souhaib </h4>
                    <p>Founder of this organisation</p>
                    <a href="https://www.facebook.com/Del.Souhaib"><img src="../images/Social media/facebook.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href="https://www.linkedin.com/in/souhaib-allout/"><img src="../images/Social media/linkedin.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href=""> <img src="../images/Social media/google.png" class="social" width="50px" height="50px"
                            alt=""></a>

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 officer">
                    <img src="../images/story/founder3.png" width="200" height="200" class="officer" alt="">
                    <h4>Soumer Radouan</h4>
                    <p>Founder of this organisation 2</p>
                    <a href=""><img src="../images/Social media/facebook.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href=""><img src="../images/Social media/linkedin.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href=""> <img src="../images/Social media/google.png" class="social" width="50px" height="50px"
                            alt=""></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 officer">
                    <img src="../images/story/founder2.png" width="200" height="200" class="officer" alt="">
                    <h4>Kamali Nouhaila</h4>
                    <p>Responsable of customers service</p>
                    <a href=""><img src="../images/Social media/facebook.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href=""><img src="../images/Social media/linkedin.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href=""> <img src="../images/Social media/google.png" class="social" width="50px" height="50px"
                            alt=""></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 officer">
                    <img src="../images/story/founder4.png" width="200" height="200" class="officer" alt="">
                    <h4>Adel Nada</h4>
                    <p>Responsable of human resources </p>
                    <a href=""><img src="../images/Social media/facebook.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href=""><img src="../images/Social media/linkedin.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href=""> <img src="../images/Social media/google.png" class="social" width="50px" height="50px"
                            alt=""></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 officer">
                    <img src="../images/story/founder5.png" width="200" height="200" class="officer" alt="">
                    <h4>Amzil ismail</h4>
                    <p>Responsable of Save animals</p>
                    <a href=""><img src="../images/Social media/facebook.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href=""><img src="../images/Social media/linkedin.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href=""> <img src="../images/Social media/google.png" class="social" width="50px" height="50px"
                            alt=""></a>


                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 officer">
                    <img src="../images/story/founder7.png" width="200" height="200" class="officer" alt="">
                    <h4>Alhian Ghita</h4>
                    <p>Responsible of delivery 2</p>
                    <a href=""><img src="../images/Social media/facebook.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href=""><img src="../images/Social media/linkedin.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href=""> <img src="../images/Social media/google.png" class="social" width="50px" height="50px"
                            alt=""></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 officer">
                    <img src="../images/story/founder6.png" width="200" height="200" class="officer" alt="">
                    <h4>Enneddam Houssam </h4>
                    <p>veterinary</p>
                    <a href=""><img src="../images/Social media/facebook.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href=""><img src="../images/Social media/linkedin.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href=""> <img src="../images/Social media/google.png" class="social" width="50px" height="50px"
                            alt=""></a>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 officer">
                    <img src="../images/story/founder8.png" width="200" height="200" class="officer" alt="">
                    <h4>Belkheyat Ahmed </h4>
                    <p>Responsible of delivery</p>
                    <a href=""><img src="../images/Social media/facebook.png" class="social" width="50px" height="50px"
                            alt=""></a>
                    <a href=""><img src="../images/Social media/linkedin.png" class="social" class="social" width="50px"
                            height="50px" alt=""></a>
                    <a href=""> <img src="../images/Social media/google.png" class="social" width="50px" height="50px"
                            alt=""></a>
                </div>
            </div>
        </div>




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








    <script src="anime.min.js"></script>
    <script src="../javascript/aboutus.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</body>

</html>