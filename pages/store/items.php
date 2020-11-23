<?php
/**************New products********** */
$server = 'localhost';
$user = 'root';
$password = '';
$database = 'school_project';
$con = mysqli_connect($server, $user, $password, $database);
if (!$con) {
    echo '<script>alert("Try again")</script>';
} else {
    $stmt0 = mysqli_stmt_init($con);
    $req0 = "SELECT * FROM `product` LIMIT 8";
    if (!mysqli_stmt_prepare($stmt0, $req0)) {
        echo '<script>alert("Try again 2")</script>';
    } else {
        mysqli_stmt_execute($stmt0);
        if (!$res0 = mysqli_stmt_get_result($stmt0)) {
            echo '<script>alert("Try again 3")</script>';
        } else {
            echo '
<div class="row pb-4 pt-5">
    <div class="col-12">
        <h2 class="bigtitle ">New products</h2>
    </div>
</div>
<div class="swiper-container">
    <div class="swiper-wrapper">
            ';
            while ($row = mysqli_fetch_assoc($res0)) {
                echo '

                    <a href="../pages/product.php?item=' . $row['Id'] . '" class="swiper-slide">
                        <div class="card" style="width: 18rem;">
                            <img src="../images/store/products/' . explode('|', $row['Pictures'])[0] . '" class="card-img-top" alt="...">
                            <div class="card-body d-flex justify-content-between">
                                <p class="card-text">' . $row['name'] . '</p>
                                <p class="card-text">' . $row['Price'] . '$</p>
                            </div>
                        </div>
                    </a>


                ';
            }
            echo '
             </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            ';
        }

    }
    mysqli_close($con);
}

/****************Hot sells****************** */

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'school_project';
$con = mysqli_connect($server, $user, $password, $database);
if (!$con) {
    echo '<script>alert("Try again")</script>';
} else {
    $stmt0 = mysqli_stmt_init($con);
    $req0 = "SELECT * FROM `hot_sells` INNER JOIN product ON hot_sells.id_product=product.Id ";
    if (!mysqli_stmt_prepare($stmt0, $req0)) {
        echo '<script>alert("Try again 2")</script>';
    } else {
        mysqli_stmt_execute($stmt0);
        if (!$res0 = mysqli_stmt_get_result($stmt0)) {
            echo '<script>alert("Try again 3")</script>';
        } else {
            echo '
<div class="row pb-4 pt-5">
    <div class="col-12">
        <h2 class="bigtitle ">Hot products</h2>
    </div>
</div>
<div class="swiper-container">
    <div class="swiper-wrapper">
            ';
            while ($row = mysqli_fetch_assoc($res0)) {
                echo '

                    <a href="../pages/product.php?item=' . $row['Id'] . '" class="swiper-slide">
                        <div class="card" style="width: 18rem;">
                            <img src="../images/store/products/' . explode('|', $row['Pictures'])[0] . '" class="card-img-top" alt="...">
                            <div class="card-body d-flex justify-content-between">
                                <p class="card-text">' . $row['name'] . '</p>
                                <p class="card-text">' . $row['Price'] . '$</p>
                            </div>
                        </div>
                    </a>


                ';
            }
            echo '
             </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            ';
        }

    }
    mysqli_close($con);
}
