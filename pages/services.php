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
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/services.css">
    <title>Our services</title>
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
                <a class="item " href="../index.php">
                    <li>Home </li>
                </a>
                <a class="item " href="../pages/aboutus.php">
                    <li>Our story</li>
                </a>
                <a class="item active" href="../pages/services.php">
                    <li>Our services</li>
                </a>
                <a class="item" href="../pages/store.php">
                    <li>Store</li>
                </a>
                <a class="item" href="../pages/community.php">
                    <li> Community</li>
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

        <h1 class="title">Our Services ,<br>Our Speciality</h1>
    </header>
    <main>
        <!--------------Insurance--------------->

        <div class="container-fluid block2">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="bigtitle">Our services</h1><br><br>
                </div>
            </div>

            <div class="row all">
                <div class="col-12 typestitle">
                    <h2 class="bigtitle">Our insurance</h2><br>
                </div>
                <div class="col-md-5 inssurance_type">
                    <h3>- Types of Pet Insurance </h3><br>
                    <div class="row text-center  ">
                        <a href="#lifetime" class="col-lg-6 col-md-12 col-sm-6 type type1">
                            <div class="image">
                                <img src="../images/ourservices/pictures/pic1.png" alt="">
                            </div>
                            <div class=" ">
                                <h4 class="modify">Lifetime policies</h4>
                            </div>
                        </a>
                        <a href="#Maximum" class="col-lg-6 col-md-12 col-sm-6 type type2">
                            <div class="image">
                                <img src="../images/ourservices/pictures/pic2.png" alt="">
                            </div>
                            <div class="   ">
                                <h4>Maximum benefit policies</h4>
                            </div>

                        </a>
                        <a href="#limited" class="col-lg-6 col-md-12 col-sm-6 type type3">
                            <div class="image">
                                <img src="../images/ourservices/pictures/pic3.png" alt="">
                            </div>
                            <div class="   ">
                                <h4>Time-limited policies</h4>
                            </div>

                        </a>
                        <a href="#Accident" class="col-lg-6 col-md-12 col-sm-6 type type4">

                            <div class="image">
                                <img src="../images/ourservices/pictures/pic4.png" alt="">
                            </div>
                            <div class="    ">
                                <h4>Accident only policies</h4>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="col-md-7 texts">
                    <h3><br><br>- Why should I take out pet insurance? </h3><br>
                    <p class="ml-4">For most of us, pets are part of the family, so when a beloved four-legged friend
                        suffers an
                        illness or injury, it is upsetting and, very often, extremely expensive.<br>

                        Vet bills can make a significant dent in your finances, so it’s worth planning for unexpected
                        costs so you’re covered if your pet needs medical treatment.</p><br>

                    <h3>- There are four types of pet insurance:</h3>
                    <p>
                        <ul>
                            <li>Lifetime policies : also known as lifelong, cover for life, reinstatement, repopulating
                                or renewable benefit policies . <a href="#lifetime" id="learn1">Learn more</a>
                            </li>
                            <li>Maximum benefit policies : also known as money limited policies or per condition
                                policies . <a href="#Maximum" id="learn2">Learn more</a>
                            </li>
                            <li>Time-limited policies : typically 12 months . <a href="#limited" id="learn3">Learn
                                    more</a>
                            </li>
                            <li>Accident only policies . <a href="#Accident" id="learn4">Learn more</a>
                            </li>
                        </ul>
                    </p>
                </div>

            </div><br><br><br>
            <div class="row lifetime" id="lifetime">
                <div class="col-12">
                    <h4>Lifetime policies :</h4>
                    <p class="ml-3">also known as lifelong, cover for life, reinstatement, repopulating or renewable
                        benefit policies
                        .
                    </p>
                    <h5 class="ml-3">What do they cover? </h5>
                    <div class="row ml-3">
                        <div class="col-md-6">
                            <p>
                                <img src="../images/ourservices/pictures/check.svg" alt=""> The policy needs to be
                                renewed to
                                ensure your pet is covered for new treatment for illnesses and injuries in the following
                                policy
                                period (usually a year). This means a long-term or recurring illness or injury that has
                                needed
                                treatment in one year will be covered again by the policy the next year. There is no
                                limit to
                                how many times the illness or injury can be covered in this way, as long as the
                                insurance policy
                                is in force.
                            </p>
                            <p>
                                <img src="../images/ourservices/pictures/check.svg" alt=""> Lifetime
                                policies insure your pet for new medical illnesses and injuries. This means that any
                                illness or
                                injury they had before the policy will not be covered.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <img src="../images/ourservices/pictures/check.svg" alt=""> Your pet is covered up to a
                                set
                                amount each year for as long as the insurance policy remains in force. If the overall
                                limit is
                                reached during the policy year, your pet will not be covered for any further treatment
                                required
                                during that year. Each time you renew your policy the full amount of money becomes
                                available
                                again.
                            </p>
                            <p>
                                <img src="../images/ourservices/pictures/check.svg" alt=""> Some lifetime policies will
                                also
                                specify a set amount to be paid for each illness/injury during the year. If the limit
                                for a
                                specific illness/injury is reached in the policy year, no further claims for this
                                treatment will
                                be paid that year.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row Maximum" id="Maximum">
                <div class="col-12">
                    <h4>Maximum benefit policies :</h4>
                    <p class="ml-3">also known as money limited policies or per condition policies .</p>
                    <h5 class="ml-3">What do they cover? </h5>
                    <div class="row ml-3">
                        <div class="col-md-6">
                            <p>
                                <img src="../images/ourservices/pictures/check.svg" alt="">If your pet has received
                                treatment
                                for a particular illness which then appears in another part of the body at a later date,
                                e.g. a
                                different leg, ear or eye, many maximum benefit policies will view this as the same
                                condition.
                                This means that the maximum amount of money will only be available once, not for each
                                time your
                                pet has the illness or injury, even if that is in another part of the body. Insurers see
                                these
                                as recurring conditions related to the previous episode so will treat as one condition,
                                for the
                                duration of the policy.
                            </p>
                            <p>
                                <img src="../images/ourservices/pictures/check.svg" alt="">There is no time limit on
                                reaching
                                the amount. Once the full amount of money has been spent, the treatment of illness or
                                injury
                                will not be covered again.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <img src="../images/ourservices/pictures/check.svg" alt="">Your pet is covered for each
                                illness
                                and injury until the maximum amount has been spent, as long as the insurance policy
                                remains in
                                force and payments are kept up-to-date. To ensure your cover lasts for as long as money
                                lasts,
                                you must renew your policy at the end of each policy period (usually a year) and make
                                payments
                                on time.
                            </p>
                            <p>
                                <img src="../images/ourservices/pictures/check.svg" alt="">Maximum benefit policies
                                provide a
                                fixed amount of money for each illness or injury to help pay for your pet’s treatment
                                for as
                                long as the money lasts.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row limited" id="limited">
                <div class="col-12">
                    <h4>Time-limited policies :</h4>
                    <p class="ml-3">typically 12 months There are two parts to these types of policies:</p>
                    <h5 class="ml-3">What do they cover? </h5>
                    <div class="row ml-3">
                        <div class="col-md-6">
                            <p>
                                <img src="../images/ourservices/pictures/check.svg" alt="">
                                1- A fixed sum to cover your pet for the treatment of each illness or injury.<br>
                                2-A set time period for which treatment of each illness or injury will be covered.
                                Policies will typically cover the cost of treating your pet for a particular illness or
                                injury for 12 months from the start of that illness or injury (as long as the policy
                                remains in force). The time-limit does not relate to the duration of the policy, but to
                                the maximum amount of time an illness or injury is covered for.
                            </p>
                            <p>
                                <img src="../images/ourservices/pictures/check.svg" alt="">When the set period has
                                ended, or the fixed sum of money for a particular illness or injury has been reached –
                                whichever comes first – your pet will not be covered for that particular illness or
                                injury for the rest of the policy duration.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <img src="../images/ourservices/pictures/check.svg" alt="">Many time-limited policies
                                apply the limits to all occurrences of an illness or injury. For example, if the same
                                illness happens in the other leg, eye or ear and the 12 month period for the first
                                episode of the illness has ended or the sum of money available been used, your pet will
                                not be covered for this further episode . Insurers see these as recurring conditions
                                related to the previous episode so will treat as one condition, for the duration of the
                                policy.
                            </p>

                        </div>
                    </div>
                </div>

            </div>
            <div class="row Accident" id="Accident">
                <div class="col-12">
                    <h4>Accident only policies :</h4>
                    <h5 class="ml-3">What do they cover? </h5>
                    <div class="row ml-3">
                        <div class="col-md-6">
                            <p>
                                <img src="../images/ourservices/pictures/check.svg" alt="">Some accident policies will
                                have a 12 month time limit. This will cover treatment by a vet for 12 months from the
                                date vet treatment starts per condition.
                            </p>
                            <p>
                                <img src="../images/ourservices/pictures/check.svg" alt="">If cover is limited to a 12
                                month treatment period, or your pet’s treatment will continue past your renewal date,
                                you must renew your policy at the end of the policy period and keep your payments
                                up-to-date to ensure your pet remains covered for future accidents that may require
                                treatment.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <p>
                                <img src="../images/ourservices/pictures/check.svg" alt="">Accident only policies
                                provide a fixed sum for each accidental injury to help pay for your pet’s treatment.
                            </p>
                            <p>
                                <img src="../images/ourservices/pictures/check.svg" alt="">Accident only policies may
                                also include an amount towards the cost of emergency treatment for an illness.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <!--------------Products--------------->



        <div class="container-fluid products">
            <div class="row">
                <div class="col-12">
                    <h2 class="bigtitle">Our Products</h2><br>
                </div>
                <div class="col-md-5 ">
                    <div class="row">
                        <div class="col-12">
                            <h3>- Type of Stores</h3><br>
                        </div>
                    </div>
                    <div class="row stores">
                        <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                            <img src="../images/ourservices/pictures/pic6.png" alt="">

                            <div class="">
                                <h4>Our Stores</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6 col-12">
                            <img src="../images/ourservices/pictures/pic5.png" alt="">
                            <div class="">
                                <h4>Online Store</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row stores_type">
                        <div class="col-md-12 ">
                            <br>
                            <h5>1. Our Stores :</h5>
                            <p>You can go to our store in your city an shop products that you want, you can see google
                                map to know where is store exacly </p>
                        </div>
                        <div class="col-md-12 ">
                            <h5>1. Online store :</h5>
                            <p>Visit our online store <a href="../pages/store.php">by clicking here</a> and you can but
                                what you need and
                                you will receive it soon as possible (max 24h) </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 ">
                    <h3>- Why you should buy our products</h3><br>
                    <p>We know your pet is part of the family, so you want to give him the best little extras to keep
                        him happy, safe and comfortable. While a few of our choices for best pet accessories are simply
                        for style, most of them are essential for keeping a pup comfortable in the elements. Pet fashion
                        is something that evolves even more rapidly than women's fashion. Every day you can see new
                        designs of collars, plates, even flannels, and coats. you will find several items that will make
                        your pet the best dressed amongst all. Always follow the latest trends so you do not have to
                        worry about the dog fashion police stop your beloved pet on the street.
                    </p>
                    <h3>- What you can bought from our store</h3>
                    <p>
                        There is so many products that you should bought for your pet for exemple :
                        <ul>
                            <div class="row">
                                <div class="col-md-6">
                                    <li>Foods</li>
                                    <li>Collars</li>
                                    <li>Leashes</li>
                                    <li>Beds</li>
                                </div>
                                <div class="col-md-6">
                                    <li>Kennels</li>
                                    <li>Toys</li>
                                    <li>Grooming Equipment</li>
                                    <li>Bowls</li>
                                </div>
                            </div>


                        </ul>
                        <a href="#typeofproduct" id="clickproduct">Read more about pets products that you will need</a>
                    </p>
                </div>
            </div>
            <div class="row " id="typeofproduct">
                <div class="col-12">
                    <br><br>
                    <p>- There are so many kinds of pet supplies available for pets that we may wonder what is really
                        necessary and what is extravagant. Realistically, there are multiple factors that contribute to
                        a happy, healthy life for your pet. You start by meeting your pet's basic needs and practicing
                        responsible pet ownership. Then, you move on to the details, like choosing pet supplies for your
                        pet. To avoid going over the top, you should determine what kinds of pet supplies your pet
                        really needs in order to complete their life. For your consideration, here’s a rundown of the
                        top kinds of pet supplies available for pets today.</p>
                    <div class="row">
                        <div class="col-12">
                            <h3>1. Food</h3>
                        </div>
                        <div class="col-md-4">
                            <img src="../images/ourservices/products/pic1.jpg" class="img-fluid" width="400px" alt="">
                        </div>
                        <div class="col-md-8">
                            <br>
                            <p>The type of food you choose give your pet has a major impact
                                your pet's overall
                                health. With so many choices out there, picking out the best foods can be a daunting
                                task. Think twice before you reach for the economy pet food off the grocery shelf – do
                                some research so you can make an educated choice. Finding the best varieties of pet
                                treats is also a part of this process.</p>
                        </div><br>
                        <div class="col-12">
                            <h3>2. Collars</h3>
                        </div>
                        <div class="col-md-4">
                            <img src="../images/ourservices/products/pic2.jpg" class="img-fluid" width="400px" alt="">
                        </div>
                        <div class="col-md-8">
                            <br>
                            <p> Every dog or cat have a collar or harness, period. This collar or harness
                                should ALWAYS be equipped with your pets current identification tags. Microchips are a
                                great way to supplement identification tags, but they are not acceptable replacements in
                                the event your pet is lost. Beyond identification, collars or harnesses are used with
                                leashes in order to walk and restrain your pet. Plus, they are a great way to show off
                                your pet personal</p>
                        </div>
                        <div class="col-12">
                            <br>
                            <h3>3. Leashes</h3>
                        </div>
                        <div class="col-md-4">
                            <img src="../images/ourservices/products/pic3.webp" class="img-fluid" width="400px" alt="">
                        </div>
                        <div class="col-md-8">
                            <br>
                            <p>Every dog needs a leash, and each should be trained to walk on it. Chances are
                                your dog will be subject to leash laws at one time or another, even if there are no
                                leash laws in your area. You may even want to keep multiple types of leashes around the
                                house for multiple uses. For fun, you can coordinate your dog’s leash and collar to
                                maximize style. Then, walk your dog regularly!</p>
                        </div>
                        <div class="col-12">
                            <br>
                            <h3>4. Beds</h3>
                        </div>
                        <div class="col-md-4">
                            <img src="../images/ourservices/products/pic4.jpg" class="img-fluid" width="400px" alt="">
                        </div>
                        <div class="col-md-8">
                            <br>
                            <p>Your pet should have a special place to go and snuggle up, whether it is an old
                                pillow that is just right, or a specific style of pet bed. pet beds come in many designs
                                to fit the needs of all kinds of pets. Try to get a bed for each pet in the house, plus
                                one extra. Or, you could get a larger bed for pets who like to share.</p>
                        </div>
                        <div class="col-12">
                            <br>
                            <h3>5. Kennels</h3>
                        </div>
                        <div class="col-md-4">
                            <img src="../images/ourservices/birds/pic1.jpg" class="img-fluid" width="400px" alt="">
                        </div>
                        <div class="col-md-8">
                            <br>
                            <p>pets kennels, or crates, can be a wonderful thing for most pets. Similar to a
                                pet bed, having a kennel can give your pet a place to retreat and feel secure. Crate
                                training is an integral part of housebreaking and can also play a role in other types of
                                training. Additionally, kennels can really come in handy for travel.</p>

                        </div>
                        <div class="col-12">
                            <br>
                            <h3>6. Toys</h3>
                        </div>
                        <div class="col-md-4">
                            <img src="../images/ourservices/products/pic6.jpg" class="img-fluid" width="400px" alt="">
                        </div>
                        <div class="col-md-8">
                            <br>
                            <p>There are very few pets that do not enjoy their toys. Some prefer a nice loud
                                squeaky toy, while others want to play fetch or tug-of-war. Play is an important part of
                                your pets development. Playing with toys often mimics the activities dogs would perform
                                in the wild, such as chewing or retrieving. Plus, they help keep your dog active and
                                stimulated.</p>

                        </div>
                        <div class="col-12">
                            <br>
                            <h3>7. Grooming Equipment</h3>
                        </div>
                        <div class="col-md-4">
                            <img src="../images/ourservices/products/pic7.jpg" class="img-fluid" width="400px" alt="">
                        </div>
                        <div class="col-md-8">
                            <br>
                            <p>So many pets need some degree of grooming, a task that requires some
                                equipment. You will need to find grooming tools that suit your pet overall grooming
                                requirements. Choose brushes, combs, and shampoos based on your pet coat type. For
                                some types, you will need hair clippers and scissors. so many pets need nail trims, but
                                the</p>

                        </div>
                        <div class="col-12">
                            <br>
                            <h3>8. Bowls</h3>
                        </div>
                        <div class="col-md-4">
                            <img src="../images/ourservices/products/pic8.jpg" class="img-fluid" width="400px" alt="">
                        </div>
                        <div class="col-md-8">
                            <br>
                            <p>Obviously, food and water are necessary for your pet to survive and remain
                                healthy. Your choice of bowls or dishes is important as well. Plastic bowls may not be
                                ideal for some pets, while stainless steel bowls are economical and durable. Ceramic
                                bowls come in various designs, adding a little personality to mealtime.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--------------Effortst--------------->


        <div class="container-fluid efforts">
            <div class="row">
                <div class="col-12">
                    <h2 class="bigtitle">Our effort to save animals</h2><br>
                </div>
            </div>
            <div class="row  effortstype">

                <div class="col-md-5 ">
                    <div class="row text-center efforts_icons">
                        <div class="col-lg-6 col-md-12 col-sm-6">
                            <img src="../images/ourservices/pictures/pic8.png">
                            <h4>Save animals from risks</h4>

                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-6">
                            <img src="../images/ourservices/pictures/pic7.png">
                            <h4>Adopt animals</h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <br>
                            <p><b> 1- Save animals </b>: You can send message to us or call us on our number if there is
                                an animal in risk and our team will comme fast as we can to save him.</p>
                        </div>
                        <div class="col-12">
                            <p><b>1- Adopt pets</b> :You can adopt a pets by comming to our office and you can select
                                the pet that you love free .</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <h3>- Why you should call us</h3>
                    <p>Save Animals Facing Extinction seeks to drive change at all levels of government that will
                        protect Earth’s most precious wildlife.</p>
                    <h3>- Why you Adopt a pet</h3>
                    <p>Adopting a pet has many benefits, some of which you may have not considered. Here are some
                        reasons why adopting a pet would benefit you and your family :
                        <ul>
                            <li> You are saving a life</li>
                            <li>You will save money</li>
                            <li>Can improve your health and make you happier</li>
                            <li>Many of the animals are housetrained</li>
                            <li>Unconditional love</li>
                            <li>Helping to eradicate puppy farms and pet shops</li>
                        </ul>
                    </p>

                </div>
            </div>
        </div>


        <!--------------Advices--------------->



        <div class="container-fluid block3title">
            <div class="row">
                <div class="col-12 ">
                    <h2 class="bigtitle">Our advices</h2><br><br>
                </div>
            </div>
            <div class="row text-center catgr">
                <a href="#dog" class="col-lg-2 col-md-3 col-sm-4 col-6 box box1">

                    <img src="../images/index/dog.png" width="100" height="100" alt="">
                    <p>Dogs</p>
                </a>
                <a href="#cats" class="col-lg-2 col-md-3 col-sm-4 col-6 box box2">

                    <img src="../images/index/cat.png" width="100" height="100" alt="">
                    <p>Cats</p>
                </a>
                <a href="#birds" class="col-lg-2  col-md-3 col-sm-4 col-6 box box3">

                    <img src="../images/index/bird.png" width="100" height="100" alt="">
                    <p>Birds</p>
                </a>
                <a href="#fishes" class="col-lg-2 col-md-3 col-sm-4 col-6 box box4">

                    <img src="../images/index/fish.png" width="100" height="100" alt="">
                    <p>Fishes</p>
                </a>
                <a href="#hamsters" class="col-lg-2 col-md-3 col-sm-4 col-6 box box5">

                    <img src="../images/index/hamster.png" width="100" height="100" alt="">
                    <p>Hamsters</p>
                </a>

                <a href="#horses" class="col-lg-2 col-md-3 col-sm-4 col-6 box box6">

                    <img src="../images/index/hors.png" width="100" height="100" alt="">
                    <p>Horses</p>
                </a>

                <a href="#turtles" class="col-lg-2 col-md-3 col-sm-4 col-6 box box7">

                    <img src="../images/index/turtle.png" width="100" height="100" alt="">
                    <p>Turtles</p>
                </a>

                <a href="#Lizards" class="col-lg-2 col-md-3 col-sm-4 col-6 box box8">

                    <img src="../images/index/lizard.png" width="100" height="100" alt="">
                    <p>Lizards</p>
                </a>
                <a href="#Bunnies" class="col-lg-2 col-md-3 col-sm-4 col-6 box box9">


                    <img src="../images/index/rabbit.png" width="100" height="100" alt="">
                    <p>Bunny</p>
                </a>
                <a href="#squirrels" class="col-lg-2 col-md-3 col-sm-4 col-6 box box10">

                    <img src="../images/index/squirrel.png" width="100" height="100" alt="">
                    <p>squirrels</p>
                </a>
            </div>
        </div>


        <!------Dogs------->



        <div class="container-fluid block3 " id="block3">
            <div class="row">
                <div class="col-12 ">
                    <h3 id="dog">- Dogs :</h3><br>
                    <p>We all want our pups to live a long, happy, healthy life and there are things every dog parent
                        can do to help make that happen. Here are 10 tips to help any dog feel happier and healthier.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>1. Spay Or Neuter</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/dogs/pic1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>Spaying stops a female dog from going into heat and can help prevent breast cancer and pyometra,
                        or infection of the uterus. Neutering a male dog can mellow out aggressive behavior and help
                        prevent testicular cancer, prostate disease, and hernias.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>2. Vaccinate</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/dogs/pic2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>By three months of age, the protective antibodies naturally passed along through a mother’s milk
                        have been used up and your puppy needs to be vaccinated to help protect him or her against many
                        common infectious diseases, including leptospirosis, distemper and parvovirus, as well as a
                        rabies vaccination. Your vet may also recommend vaccinations for kennel cough and Lyme disease.
                        Vaccinations will save your dog’s life.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>3. Visit Your Vet</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/dogs/pic3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>Like you, dogs need regular visits to the doctor to ensure good health. An annual health check
                        gives your vet the chance to nip any illness or health concerns in the bud before they can cause
                        big problems and bills. The vet will ask about your pet’s behavior, eating, and exercise habits,
                        while checking your dog’s vital stats. Check at your local pet store for low-cost pet clinics
                        that can help keep costs down.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>4. Declare War On Fleas And Ticks</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/dogs/pic4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>Fleas can cause health problems beyond itchy skin. They can be the source of allergies, anemia,
                        and tapeworms. Fortunately there are a myriad of flea control products available, including
                        Advantage and Frontline, two of the most popular. Monthly applications should be given based on
                        the weight of your dog. Keep in mind when you are gearing up for your flea wars you must treat
                        all your pets, not just the ones where fleas are obvious.

                        You especially have to be vigilant in warmer months and with global warming those warmer months
                        seem to last longer and longer, which means you may need to extend those summer treatments.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>5. Treat Heartworm By Preventing It</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/dogs/pic5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>Heartworm is very difficult to treat and can be fatal for your dog so prevention is the key.
                        Giving your dog one dose monthly of a tablet, like Heartguard, can stop heartworm before it
                        starts.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>6. Exercise Your Dog Every Day</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/dogs/pic6.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>And not just a quick jaunt around the block. Exercise through walking and playing with your dog
                        will keep your little buddy physically fit, mentally healthy, and reduce the chance of
                        belligerent and destructive behavior as well. Regular exercise also helps your dog maintain a
                        healthy weight and heart, while increasing muscle mass. Your dog’s exercise requirements will be
                        different depending on breed, sex, age, and health.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>7. Watch Your Dog’s Weight</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/dogs/pic7.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>Lack of exercise and overfeeding is as much a problem in pets as it is in people. Your dog cannot
                        decide how much exercise he or she needs or what kind of food is best to eat; only you can do
                        that. Arthritis, liver disease, and coronary disease are just a few of the health issues facing
                        an overweight dog. To help your dog lose weight, your vet may recommend a mix of exercise and
                        switching to a low-calorie brand of food, or gradually reducing the amount of regular food you
                        feed your dog. If your pup is overweight talk to your vet to figure out the best course of
                        action.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>8. Weekly Health Checks</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/dogs/pic8.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>One of the best ways to prevent health issues is to check up on your dog weekly. First, inspect
                        your dog’s coat and skin for swelling, flakes or scabs. Then look into your dog’s ears and eyes
                        for any signs of redness or discharge. Finally watch for any changes in eating or drinking
                        habits. If anything differs from what’s normal for your dog, consult your vet.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>9. Stay Away From Dangerous Foods</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/dogs/pic9.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>The ASPCA Animal Poison Control Center compiled a list of foods that could be dangerous, even
                        poisonous for your dog: alcoholic beverages, chocolate, avocado, coffee, fatty foods, macadamia
                        nuts, spoiled or moldy foods, onions and onion powder, grapes and raisins, salt, garlic, yeast
                        dough, and products sweetened with xylitol. Post this list and be sure your family and any
                        caregivers are aware of it.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>10. Brush Those Teeth!</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/dogs/pic10.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>Bad breath can be a sign of teeth or gum problems. Particles of food, saliva, and bacteria known
                        as plaque can build up on the gums and teeth and cause infection. If you don’t treat this,
                        infection can result in tooth decay and even move into the bloodstream and affect your pet’s
                        heart, lungs, liver, kidneys, bones, and joints. Inspect teeth and gums weekly, and check with
                        your vet for instructions on regular brushing with canine toothpaste.</p>
                </div>
            </div>
        </div>



        <!--------------Cats---------------->



        <div class="container-fluid block4" id="block4">
            <div class="row">
                <div class="col-12 ">
                    <h3 id="cats">- Cats :</h3><br>
                    <p>Having a cat can mean different things to different people. Some want a cat to cuddle and sit on
                        their laps; others are happy to live with a very independent cat which spends most of its time
                        outside and doesn’t want too much human interaction.

                        What is important is that you try to find a cat that will interact with you if you want it to.
                        All cats are not the same and how each individual cat behaves with you can depend on its
                        inherent personality and early experiences (or lack of experiences), which can make it fearful
                        or confident with people and life in general.

                        The environment in which you keep a cat is also extremely significant – for example if it lives
                        with many other cats which do not get on, then it will be stressed and will react differently
                        than if it was on its own.

                        While there is no guaranteed way to choose the perfect cat for you and your lifestyle,
                        understanding your expectations as well as what makes cats tick will help you to bring home a
                        cat that should be able to cope with its new environment and be the pet that you want too.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>1. To care for a cat you will need to:</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/cats/pic1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>
                        <ul>
                            <li> Provide plenty of human companionship</li>
                            <li> Provide regular, suitable meals with a constant supply of fresh water</li>
                            <li>Provide a clean and comfortable bed</li>
                            <li>Provide the cat with outdoor access or be prepared to empty and clean a litter tray on a
                                daily basis</li>
                            <li>Provide it with a stimulating and safe environment</li>
                            <li>Groom it regularly. Longhaired cats require daily grooming</li>
                            <li>Have it neutered between 4 and 6 months old</li>
                            <li>Vaccinate against the major feline diseases regularly</li>
                            <li>Worm regularly and provide treatment for fleas</li>
                            <li>Take the cat to the vet when it shows any sign of illness</li>
                            <li>Insure your cat or make sure you can afford the cost of any veterinary treatment it may
                                need
                            </li>
                        </ul>

                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>2. How much care and attention does a cat need?</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/cats/pic2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>As pets go, cats are relatively low maintenance compared to dogs which need companionship,
                        walking, training etc. However, like any pet, they do need care, and some cats need more care
                        than others. Do you want to spend a lot of time with your cat, do you want it to be demanding,
                        or do you have limited time? Cats can fit into busy, modern lifestyles more easily than dogs, as
                        they are pretty independent, can be left alone much more easily and are more suitable for
                        smaller flats or houses. Cats are often chosen by people who have busy and stressful lifestyles
                        and who want some companionship when they go home to relax.</p>

                    <p> What do you want from your relationship with a cat? If you’re the kind of person who really
                        needs to have a close relationship with your cat and to be able to handle it and have it
                        interact with you, then you’ll be disappointed if you take on a nervous cat that hides every
                        time you come into the room. You may want to think about one of the pedigree breeds which can be
                        more interactive and perhaps more needy of human company than some moggies. This may however
                        become a problem for the cat if you are out at work all day and only available to give attention
                        on evenings or weekends.</p>
                    <p> Some cats need to know exactly what’s going to happen when, in order to feel relaxed. Such cats
                        would be quite happy living with an old lady who rarely has visitors and leads a very quiet
                        life, but would probably find it quite stressful living in a home full of kids and other animals
                        with lots of visitors and activity. Other cats, however, might thrive on different interactions
                        with lots of people and fit in perfectly well in a busy household.</p>

                </div>
                <div class="col-12">
                    <p> If you’re not likely to have the time or inclination to groom a cat on a daily basis, don’t even
                        think of getting a Persian or a cat with a long coat. In pedigree jargon, any cat with a longer
                        coat, aside from a Persian, is called semi-longhaired because the coat is not as full as the
                        Persian’s and does not have such a thick undercoat; however, it is still long and requires
                        grooming. In addition, if you are extremely house-proud, you may not want lots of hair
                        everywhere.
                    </p>
                    <p>
                        A shorthaired cat is a much easier option, as most cats are fanatical about their coats and keep
                        them in immaculate condition. That’s not to say that they don’t leave hairs around – bear this
                        in mind if you’re thinking of getting a white cat but have dark furniture, or vice versa.
                        Likewise, a cat is quite likely to sharpen its claws indoors, often on the stair carpet,
                        sometimes on the furniture or even on the wallpaper. Whether your cat does this can depend on
                        the cat itself and also the environment you provide for it; however there are things you can do
                        to try and deal with this, but it is best to acknowledge from the outset that your cat is an
                        animal with free will and natural behaviour that may not suit someone who needs to have an
                        immaculate house.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>3. Can I keep a cat on vegetarian food?</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/cats/pic3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>Are you a vegetarian and want your cat to be one too? If you want a vegetarian pet that won’t
                        challenge your beliefs, then it would be better to get a rabbit – a cat is a carnivore first and
                        foremost, and looks and behaves as it does for just this reason. A cat is what is called an
                        obligate carnivore – it has an absolute need for some of the nutrients found in meat and all of
                        its senses of smell and taste are atuned to being a carnivore – it would be unfair and very
                        dangerous to health to even attempt keeping it as a vegetarian.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>4. Is there a type of cat which doesn’t hunt?</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/cats/pic4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>You may have a great aversion to your cat hunting outside. Perhaps you are a bird lover, or are
                        simply unable to deal with small carcases on the floor. Hunting is normal behaviour for cats.
                        Keeping a cat indoors may prevent it actually killing anything, but it will still need an outlet
                        for this, its most instinctive behaviour, and not all cats will be happy with an indoor
                        lifestyle. Likewise, if you’re simply getting a cat to keep vermin at bay, you won’t want to
                        find yourself with one which isn’t especially interested in huntin’, shootin’ and fishin’ and
                        prefers being a couch potato! Older cats are likely to hunt much less than younger ones and some
                        cats don’t bother at all, but there is no easy way to know how a cat will behave.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>5. Can I keep a cat indoors?</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/cats/pic5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>If you think about the lifestyle of a cat which has access outdoors you will realise that being
                        outdoors brings a huge variety to its life and allows it to use all of its hunting behaviours if
                        it wants to. Of course, there are risks outside for cats, but you need to balance these with the
                        very positive aspects of physical and mental stimulation and an outlet for natural behaviour.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>6. Can I have a cat with a baby or young children?</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/cats/pic6.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>There is no reason not to have a cat or kitten if you have children. It is up to parents to teach
                        their children from the very beginning how to approach, stroke and handle cats and to treat them
                        kindly. Many children have fantastic relationships with their cats and learn about respecting
                        other creatures and being gentle – it is done successfully all the time, but it is up to parents
                        to lay down the rules. Perhaps taking on a new kitten when you have a new baby or a toddler
                        might be a lot to handle at once, so ensuring you have time for all the parties is part of a
                        successful relationship. Likewise, if you are pregnant there is no need to get rid of the cat.
                        Simple and basic hygiene precautions and common sense management of the cat, while the baby is
                        small, can ensure all cohabit happily and safely.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>7. Should I get an adult cat or a kitten?</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/cats/pic7.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>A kitten gives you the opportunity to take on an animal right from the beginning and treat it and
                        care for it so that it gets the best start in life. You will also be able to get some idea of
                        its character. However, kittens require a lot of attention and some forethought to prevent them
                        from getting into trouble. If you leave them alone you have to make sure they will be safe while
                        you are away. You may also have to organise neutering, initial vaccinations and so on, depending
                        on where you get your kitten from.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>8. What sex of cat should I get?</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/cats/pic8.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>The sex of a kitten doesn’t really matter, as long as you neuter your kitten before it reaches
                        puberty (at about four months of age) when the influence of sex hormones kick in. Un-neutered
                        cats may exhibit unwelcome reproductive behaviours. For example, un-neutered male cats will mark
                        their territory with strong smelling urine while un-neutered female cats can come into season
                        every two weeks if they do not become pregnant.

                        If you are getting just one cat or kitten, it doesn’t matter which sex you choose. Equally, if
                        you want two kittens and you are getting two from the same litter, the sex of either cat is
                        probably not important. However, if you have a resident cat and are getting just one kitten or
                        another cat, it may be worth considering going for one of the opposite sex to try and remove
                        some of the competition factor. A kitten may be a better option than another adult cat in such
                        cases as the young cat’s immaturity seems to remove this competition factor – for a while anyway
                        during which time you hope they will get to like each other! Neutering also removes the need for
                        so much competition and makes the choice of sex much less important.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>9. Should I choose a specific breed or moggie?</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/cats/pic9.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>The majority of cats kept as pets are what we call moggies or domestic short or long haired cats
                        – that is they are a random mixture of lots of different cats, we have often have little idea
                        about their parentage (well the father anyway). This means we have no control over the colour,
                        body shape, coat length or anything else that the kittens can inherit from their parents. So,
                        for example, if your kitten is from a moggie mum but its father is unknown, it may develop a
                        longer coat than you desire if the father was indeed longhaired.

                        There is more to choosing a pedigree cat than just liking a certain coat colour or length –
                        there are ethical considerations with some breeds if you really want to consider the cat’s
                        welfare. There are also health issues which you need to check with the breeder and things you
                        need to ask. Good breeders aim to breed healthy, people-friendly cats and avoid (or seek to deal
                        with) inherited disorders which arise.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>10. Can I have a cat if I have a dog?</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/cats/pic10.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br><br>
                    <p>If you have other pets there should not be a problem in getting a cat, but you just need to make
                        sure that you take everything into consideration. If you have a dog you just need to make sure
                        that you make introductions carefully so that your new cat is not chased or injured while the
                        dog gets used to it. Not all dog types make good companions for cats.
                    </p>
                </div>
            </div>
        </div>


        <!--------------Birds---------------->



        <div class="container-fluid block5" id="block5">
            <div class="row">
                <div class="col-12 ">
                    <h3 id="birds">- Birds :</h3><br>
                    <p>Having a bird as a pet means enjoying one more member at home. There are many benefits to having
                        a bird at your side, but it also requires some sacrifice. A pet is not a toy. It requires care,
                        care, and even having permits in order in some cases.

                        Choosing the right species is fundamental. Each bird has its peculiarities, and therefore, it is
                        necessary to get to know them carefully before acquiring them. Keep in mind that it is not the
                        same to take care of a lovebird than a parrot or a peacock.

                        Therefore, in this post, we have collected some tips when choosing the most appropriate bird, so
                        you will have a good companion and your bird a good caregiver.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>1. To Value your house conditions :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/birds/pic1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p><br>
                        Your house’s infrastructure is decisive. It must be appropriate according to the size and needs
                        of your bird. It doesn´t have to only about the cage, but space you have in the rest of your
                        house.

                        For example, if you want a duck or peacock, it would be great to have a large outdoor garden
                        with a pond or drinker because they are birds that like to have the freedom to move.

                        However, if your house is small, you better buy a Goldfinch, canary or other similar birds. With
                        a small cage, a suitable temperature and a feeder, you will satisfy its basic accommodation
                        needs.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>2. Keep in mind who lives with you :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/birds/pic2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>Even if you’re willing to have a bird as a pet, you should keep this point in mind. Coexistence
                        is important, and if any member of your family is not convinced that it is a good idea, discard
                        this option or try to achieve an agreement. In the end, the worst victim could be your bird
                        which is not guilty.

                        Having at home small children or people allergic to animals can be a harmful detonating. Make
                        sure that the arrival of the pet does not involve physical harm to itself or the members of your
                        house.</p>

                </div>

            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>3. Can you dedicate your bird the time it needs?</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/birds/pic3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>Like having a baby, getting a bird as a pet is a sacrifice. You need to feed it, keep it
                        hygienic, or having control over its health. Annual reviews and disease control are essential
                        for its wellbeing.

                        If you are a busy person or you are limited by any question, rule out totally make you with any
                        pet, they could suffer the abandonment and die for not having a hygiene and adequate or not
                        paying attention to their possible ailments.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>4. Can you afford it?</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/birds/pic4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>The prices of birds may vary according to the species like some cats and dogs. If you track
                        animal sales portals, you will find very disparate rates. While a parakeet can be over 10-15
                        euros average, a parrot Macaw exceeds 1000 euros in many cases.

                        Exotic birds are the most expensive both when acquiring and maintaining them. The average can
                        usually be over 100-150 euros per month. These expenses are for buying food, toys, cage and
                        other supplies.

                        A lot of people think that just because they are small animals, the expenses are reduced.
                        However, it is better to have the calculator on hand and to value the bird that best fits your
                        economy.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12">
                    <h5>5. Do not treat it as any other ornament of your house</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/birds/pic5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>A bird is not a piece of furniture or a painting. It is a living being that you must care for and
                        be responsible for its wellbeing. Do not follow fads or trends and acquire a bird just for a
                        craving.

                        Remember that in BBI Laboratories we specialize in DNA sexing and bird disease detection.
                        Besides, you can also follow us on our main social networks (Facebook, Twitter, Instagram) where
                        we share relevant information about our activity and the world of birds.
                    </p>
                </div>
            </div>

        </div>



        <!--------------Fishes---------------->


        <div class="container-fluid block6" id="block6">
            <div class="row">
                <div class="col-12 ">
                    <h3 id="fishes">- Fishes :</h3><br>
                    <p>Different types of aquatic life will require different water conditions, but for any underwater
                        creature, a proper environment is critical. A few factors to consider include:</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>1. Properly cycle the tank :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/fishes/pic1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p><br>
                        While you might think you’re going to be able to fill a lovely glass bowl with water out of the
                        tap and plop your new fish right into it, it’s definitely not recommended. Fill your tank with
                        gravel, add your filter, then add water. Allow time for beneficial bacteria to populate the
                        gravel and the filter. Use a tank starter if time does not permit. Then set your tank to
                        maintain the proper temperature and pH for the species of fish kept and add appropriate
                        lighting.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>2. Acclimate :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/fishes/pic2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p><br>Make sure your fish are conditioned to the water you’ll be using and the water temperature
                        before
                        adding them to the tank. This can be done by floating them in bags or gradually adding tank
                        water to the bag. It should only take about 15 minutes to an hour to do this.</p>
                </div>

            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>3. Ensure plenty of elbow room :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/fishes/pic3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>Don’t over crowd your finned family members! Make sure there is no more than (roughly) 1 inch of
                        fish per gallon of tank size. The best bet is to purchase the biggest tank your budget and your
                        space allows. That way, you’ll have room to grow your collection if you decide that fish keeping
                        is your thing (which it totally will be, for sure).</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>4. Segregation in fish tanks is actually a good thing :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/fishes/pic4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>Don’t mix aggressive fish, like betas, with community fish, like goldfish. If you do, you’re
                        obviously only asking for trouble. The same goes for large fish and small fish — to ensure
                        harmony, make sure you either only get fish of one general size or keep two separate
                        environments.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>5. Fish food 101 :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/fishes/pic5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br><br>
                    <p>Certainly, you need to feed your fish, but it’s important that you don’t overfeed. Sprinkle with
                        a light hand, and if your fish are leaving food floating, chances are good that you’re feeding
                        too much. It’s a good idea to vary the diet so it includes food of several different types,
                        including flakes, pellets, fresh and freeze-dried foods..
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>6. Monitor the water :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/fishes/pic6.jpg" height="300" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>The health of your fish depends upon having water in the tank that is healthy for them to live
                        in. Monitor the water quality, including pH, ammonia and nitrite levels by using an at-home test
                        kit, or submit a water sample for testing at your local fish or exotic pet shop. Make the
                        necessary adjustments as indicated.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>7. Clean house :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/fishes/pic7.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>Make sure to clean the tank regularly — approximately every two to three weeks. This includes a
                        complete change out of the water and the filter media, vacuuming of the gravel and cleaning the
                        tank glass.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>8. Keep the peace :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/fishes/pic8.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>You might think fish are a peaceful species, and they typically are; however, you need to keep an
                        eye out to ensure that there’s no bullying going on between fish, because this can happen. You
                        also need to monitor your fish for bacterial, fungal and parasitic infections, as well as
                        generalized lethargy, floating at the surface of the water and inability to stay upright.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>9. Act quickly :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/fishes/pic9.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>If you notice any signs of illness, quarantine any unwell fish in a separate tank immediately.
                        Consult with the store where you bought your fish or ask PetCoach for help in figuring out
                        what’s going wrong and how to correct it.
                    </p>
                </div>
            </div>
        </div>


        <!--------------Hamsters---------------->


        <div class="container-fluid block7" id="block7">
            <div class="row">
                <div class="col-12 ">
                    <h3 id="hamsters">- Hamsters :</h3><br>
                    <p>Four paws, two bright eyes, and a set of twitchy whiskers. There’s nothing cuter than a pet
                        hamster! If you’ve recently welcomed a hamster into your family, here are nine quick care tips
                        to memorize.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>1. Choose a habitat :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/hamsters/pic1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p><br>
                        Your little dude (or dudette) needs a safe home in which to explore and feel comfortable.
                        Explore colors, tubes, accessories, and add-ons to make their habitat unique! Pick bedding they
                        can burrow in, and make sure to choose the right-sized water bottle like a 6-ounce chew proof
                        water bottle.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>2. Put their habitat in the right place :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/hamsters/pic2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p><br>As is the case with many small animals, placement is essential to a happy pet. Put your
                        hamster’s home near the sounds of your family, but not right in the thick of things. They’ll be
                        comforted by your day-to-day sounds, but will be stressed out by loud noises and lots of hubbub
                        right outside their space.</p>
                </div>

            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>3. Cover their habitat with a light cloth for the first few days :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/hamsters/pic3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>When you bring your new hamster home, everything is new to them. Give them the headspace to get
                        to know their new habitat for a few days – without the distractions of your home – by placing a
                        light cloth over their space. Feel free to take this cover off for bonding time!</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>4. Wait a few days before trying to pick them up :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/hamsters/pic4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>Like any new friendship, it takes time to get to know someone and feel comfortable with them.
                        That said, wait a while to handle your hamster or pick them up. After a few days of giving them
                        food and water, they’ll start to trust you!</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>5. Once they’re acclimated, think outside the box for feeding time :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/hamsters/pic5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br><br>
                    <p>You don’t eat the same things every day, do you? Your hammie will appreciate a varied diet as
                        much as humans do. In addition to their normal, everyday food, try giving them small amounts of
                        carrots, squash, broccoli, cucumbers, apples, pears, or berries. Ask your vet about the best
                        foods to feed your new friend.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>6. Clean and wash your hamster’s space regularly :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/hamsters/pic6.jpg" height="300" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>There’s a happy medium between keeping your hamster’s home clean and comfy and creating undue
                        stress by cleaning it too much. In general:
                        <ul>
                            <li> Clean the toilet area daily
                            </li>
                            <li> Change bedding as needed (when soiled/wet)
                            </li>
                            <li> Wipe out their food dish weekly
                            </li>
                            <li> Clean out their water bottle weekly
                            </li>
                            <li> Empty their entire habitat weekly or twice a week
                            </li>
                            <li> Place all new bedding weekly
                            </li>
                        </ul>
                        Every week or every other week, take soap and water and wipe down the entire habitat once it’s
                        empty of bedding, toys, and other pieces. That extra step will keep your hammie’s space smelling
                        good.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>7. Give them plenty of out-of-habitat time :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/hamsters/pic7.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>A great way to give your hamster exercise and get some needed bonding time is to provide ample
                        playtime outside their habitat each week. We suggest setting up a small gated area with lots of
                        toys and some treats so they can explore and say hi to their human family! Remember to always
                        supervise your hamster when he or she is out of their habitat.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>8. Take time to bond with your hammie :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/hamsters/pic8.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>Patience, regular feeding, lots of out-of-habitat playtime, and soft talk will go a long way in
                        helping you bond with your hamster. Make sure to always approach your pet slowly and talk to
                        them in a conversational manner. They’ll learn to recognize your scent and voice and see you as
                        a source of comfort.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>9. Handle your pet with care :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/hamsters/pic9.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>Unlike other small animals, hamsters and gerbils need to be picked up with both hands and cradled
                        in cupped hands. The same goes for putting them down, but use extra caution so they don’t
                        accidentally escape from or slip through your hands. Because these pets are naturally nocturnal,
                        be sensitive to the time of day you are trying to handle your hammie. You wouldn’t want someone
                        snatching you up out of your sweet dreams!

                        Ready to start pet parenting your hammie like a pro? Explore our small pet supplies for bedding,
                        habitats, treats, chews, and much more. Want more info? Explore our always-growing collection of
                        small animal advice written by our pet experts.
                    </p>
                </div>
            </div>
        </div>




        <!--------------Horses---------------->


        <div class="container-fluid block8" id="block8">
            <div class="row">
                <div class="col-12 ">
                    <h3 id="horses">- Horses :</h3><br>
                    <p>Horse rescues can be great place for you to find a special equine partner. Plus, you’ll be giving
                        your adopted horse a second chance at life.Well-run rescues will want to send an agent to visit
                        the location you plan to keep your horse to verify that you have a safe, suitable facility.</p>
                    <p>Horse rescues can be great place for you to find a special equine partner. Plus, you’ll be
                        giving your adopted horse a second chance at life.</p>
                    <p>Thinking of adopting a rescue horse? Here are 10 tips to help you through the adoption process.
                    </p>

                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>1. Be prepared :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/horses/pic1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p><br>
                        Well-run rescues will want to send an agent to visit the location you plan to keep your horseto
                        verify that you have a safe, suitable facility. For information on equine housing, go to
                        EquiSearch.com (HorseLink’s sister site), and search for “Horsekeeping,” “Barns,” and
                        “Pastures.”
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>2. Find a reputable rescue organization :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/horses/pic2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p><br>A reliable rescue will take good care of the horses, and be honest with you about their
                        health and training. You can find approved horse rescues through the Global Federation of Animal
                        Sanctuaries.</p>
                </div>

            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>3. Consider all costs :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/horses/pic3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>The adoption fees may be low, but the cost of owning and caring for a horse is ongoing. Before
                        you adopt, create a budget that includes all horse-related expenses. To determine your expenses,
                        talk to local horse owners, farriers, and veterinarians.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>4. Don’t fall for a pretty face :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/horses/pic4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>Choose the horse that matches your skill level, even if he doesn’t look like what you imagined.
                        Better to have a horse that you feel safe with than one that looks great standing in the
                        pasture. The rescue staff can help you make this decision.</p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12  mb-5">
                    <h5>5. Rely on an experienced horse person :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/horses/pic5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br><br>
                    <p>If you’re a beginner or intermediate rider, employ the help of a trained equine professional or
                        knowledgeable horse person. This person and the rescue staff will be able to help you decide if
                        a horse is a good fit for your riding ability and personality.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12  mb-5">
                    <h5>6. Be ready to ride</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/horses/pic6.jpg" height="300" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p> A reputable horse rescue will expect you to demonstrate your riding ability at two adoption
                        appointments. This enables the staff to make sure you and the horse are suitable for each other.
                        So, be sure to wear appropriate riding pants and boots, and don’t forget your ASTM-approved,
                        SEI-certified riding helmet.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12  mb-5">
                    <h5>7. Schedule a pre-purchase exam :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/horses/pic7.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p> When you’ve found a horse you think you’d like to adopt, schedule a pre-purchase examination
                        with an equine veterinarian. The scheduling and cost are your responsibility. If the horse
                        passes, continue with the adoption process, and take the horse home.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12  mb-5">
                    <h5>8. Be patient :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/horses/pic8.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>Keep in mind that rescue horses may’ve experienced some kind of neglect and/or abuse. It takes
                        patience, perseverance, and confidence to rehabilitate a horse that has lost trust in humans.
                        Give your horse plenty of time to learn new things. Stay calm, and remember to breathe..
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12  mb-5">
                    <h5>9. Bond :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/horses/pic9.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>Spend time bonding with your new equine partner through grooming, ground work, treats, and pats.
                        Give him several weeks to adjust to his new home and routine. His past experiences may cause him
                        to be on edge in a new environment, and he needs your confidence to help him through.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12  mb-5">
                    <h5>10. Stay flexible :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/horses/pic10.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <br>
                    <p>Keep in mind that horse rescues often retain ownership of the adopted horse for a certain period
                        of time. This allows the organization to take the horse back if you, or the rescue, decide
                        things aren’t working out. Expect a follow-up visit a few months after you’ve adopted your horse
                        to make sure you’re both thriving. Take this opportunity to ask the rescue agent any health or
                        behavioral questions you might have.
                    </p>
                </div>
            </div>
        </div>




        <!--------------Turtles---------------->


        <div class="container-fluid block9" id="block9">
            <div class="row">
                <div class="col-12 ">
                    <h3 id="turtles">- Turtles :</h3><br>
                    <p>Turtles are fascinating to watch, and many have attractive colors and markings, and interesting
                        personalities. They can make great interactive pets. They are known for recognizing their owners
                        and endlessly begging for food. It’s all part of their charm. <br>

                        However, a lot of work is involved in keeping a turtle. They are not like dogs and cats. Turtles
                        don’t enjoy being handled. They can easily live up to 20 or 30 years, and providing them with
                        the proper enclosure as they grow can be a larger investment than you initially expected. By
                        purchasing a turtle, you are making a commitment to their care — and doing so for the long haul.
                    </p>

                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>1. Turtle Necessities :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/turtles/pic1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>
                        As far as housing goes, bigger is better. Many aquatic turtles are active swimmers, so choose
                        the largest size enclosure possible. Glass aquaria are a popular choice. A 30-gallon tank is the
                        absolute minimum size for smaller species measuring between 4 and 6 inches. For turtles between
                        6 and 8 inches, a 55-gallon tank is appropriate. And for turtles measuring more than 8 inches,
                        tanks in the 75- to 125-gallon range are a better choice. If you start with a younger, smaller
                        turtle, a smaller tank is acceptable as long as the enclosure size increases as your turtle
                        grows. <br>
                        Other turtle housing choices include plastic tubs available at most home or hardware stores.
                        Some tubs with both a water and land area are even designed specifically for turtles. If you
                        have the room, another great option is an indoor or outdoor pond.

                        One secret to successful turtlekeeping is clean water. A good filtration system goes a long way
                        in accomplishing this. Two excellent choices for turtle tanks are an internal aquarium filter or
                        a canister filter. Whichever you choose, make sure you regularly maintain the filter. Turtles
                        are really messy. <br>

                        Keep tank decorations to a minimum. Most turtles destroy any attempts at aquascaping. Substrate
                        in a turtle tank only accumulates uneaten food and waste, which quickly fouls the water, yet
                        some turtle species, such as soft-shell turtles, which need a soft sand bottom, require it.
                        However, for most turtles I don’t use any substrate or gravel, making cleaning much easier. On
                        the other hand, if a bare-looking tank is not aesthetically appealing to you, feel free to
                        decorate it, but be prepared for more difficult and more frequent cleaning. <br>

                        One piece of décor is essential to most turtle habitats: a basking spot. This can be a carefully
                        placed rock, a piece of driftwood or one of the ready-made basking platforms available at local
                        pet stores. I highly recommend above-tank basking platforms for most aquatic turtles. Whatever
                        type of basking spot you pick, select one large enough to allow the turtle to climb out of the
                        water completely, and place it securely under the basking light.

                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>2. Turtle Lighting Requirements :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/turtles/pic2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>An important aspect of turtle care often neglected or misunderstood is lighting. Turtles reap
                        two primary benefits from light: ultraviolet light and heat.
                        <br>
                        Two types of ultraviolet light, UVA and UVB, are essential for your turtle’s health. UVA light
                        seems to encourage natural behavior such as feeding and reproduction. Turtles require UVB for
                        the synthesis of vitamin D3, which in turn allows calcium absorption and metabolism. Correct UVB
                        exposure is also necessary for a turtle’s growth. Without it, there is potential for serious
                        health issues such as poor shell growth, secondary hyperparathyroidism and a shorter life span.
                        <br>

                        Turtles also get heat from light. Like all reptiles, turtles are ectotherms, so they need
                        different temperature zones to regulate body temperature. A good general rule is to maintain a
                        basking spot within the range of 85 to 95 degrees Fahrenheit. The water temperature should
                        average about 10 to 15 degrees lower than the basking spot, and you can attain it with a
                        submersible aquarium heater.
                        <br>

                        Many styles of bulbs and light systems are available. Whichever you choose, make sure it takes
                        care of your turtle’s UV and heat requirements. Not all turtles have the same needs, so research
                        the specific needs of any turtles you wish to keep.</p>
                </div>

            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>3. Turtle Do’s and Don’ts :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/turtles/pic3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>
                        Do:
                        <br><br>
                        Whenever possible, buy captive-bred turtles. They are already adapted to captivity, there is
                        less of a chance for disease or parasites, and they are accustomed to commercial turtle foods.
                        Whether purchasing your turtle from a local pet store, breeder or online, ask whether they are
                        captive bred or wild caught. Another option is to adopt from a local turtle rescue organization.
                        They might have a turtle just right for you.
                        <br>
                        <br>
                        Don’t:
                        <br><br>

                        Please don’t collect animals from the wild. Many states restrict wild collections, and many
                        turtle species are threatened or endangered, making them illegal to collect.
                        <br>

                        Please don’t release unwanted turtles into the wild. Doing so could cause major environmental
                        problems. In addition, your turtle may not be equipped to handle the local environmental
                        conditions, so you could be sending it to its death.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>4. Nutritional Needs For Your Pet Turtle :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/turtles/pic4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>When it comes to raising a healthy turtle, prevention is the best medicine. A well-balanced diet
                        is a key to success. Offer as many different foods as possible with a quality turtle food as the
                        diet staple. Keep in mind a turtle’s dietary needs change as it matures. Although many are
                        primarily carnivorous as hatchlings, they consume more plant matter as they reach adulthood. For
                        some adult turtles, plant matter may even make up the majority of their diet.<br>
                        In addition to turtle pellets, many frozen and freeze-dried foods are available, including
                        krill, crickets, grasshoppers and snails. Turtles also readily accept live foods such as
                        insects, worms, snails and small fish. These can be gut-loaded or dusted with calcium for added
                        benefit. I also encourage the use of cuttlebone as an additional source of calcium for your
                        turtle.<br>

                        For greens, turtles enjoy dandelion leaves, and green- and red-leaf lettuce. Aquatic plants
                        available at the local pet store such as anacharis, water lettuce and water hyacinth are also
                        good additions. Avoid iceberg lettuce, however, because it doesn’t have any real nutritional
                        value. Other foods to avoid are spinach, mushrooms and cabbage. In general, I would not
                        recommend fruits either.

                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>5. Great Beginner Turtles :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/turtles/pic5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>Not all turtles are appropriate for beginners. Some have special needs, such as dietary
                        restrictions or large habitat requirements. However, many turtles make great first pets.
                        <br>
                        Painted Turtles: As is indicated by their namesake, painted turtles (Chrysemys picta) are very
                        attractive. There are four recognized subspecies: eastern painted turtles (C. p. picta),
                        southern painted turtles (C. p. dorsalis), western painted turtles (C. p. bellii) and midland
                        painted turtles (C. p. marginata). With the exception of C. p. marginata, which can grow up to
                        10 inches, these turtles remain between 5 to 7 inches, making them an excellent choice for
                        novice turtlekeepers.
                        <br>

                        Painted turtles are big baskers, so a basking spot is a must. Most are fairly active swimmers,
                        so provide a water area large and deep enough for them to swim. In my experience they have
                        always proven to be robust eaters. Like many other turtles, they are omnivorous with their diet
                        consisting of more plant matter as they mature.
                        <br>

                        These turtles truly have everything you could ask for in a turtle: a relatively small size,
                        beautiful colors, a hearty appetite, ease of care and a rather pleasant nature.
                        <br>

                        Sliders and Cooters: One could make the argument that sliders (Trachemys scripta) and cooters
                        (Pseudemys spp.) don’t make good beginner turtles. The main reason is their adult size; some
                        females can measure 16 to 18 inches. For this reason alone, you might be better off selecting a
                        different family of turtles unless, of course, you can provide a large enough enclosure. A
                        75-gallon tank is considered the minimum size to house one of the smaller turtles in this
                        family. A 125-gallon tank or larger is required for some of the bigger species.
                        <br>

                        Yet sliders and cooters can make great pets. Hardy, they adapt well to captivity, eagerly accept
                        all foods and have attractive markings and colors. These turtles are big baskers and appreciate
                        deeper water, especially as they grow. Primarily carnivorous as hatchlings, many adults shift
                        their diets to more plant matter.
                        <br>

                        One personal favorite is the yellow-bellied slider (Trachemys scripta scripta). They tend to
                        range between 5 and 12 inches, and they have attractive yellow coloring.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>6. Avoid These Turtles</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/turtles/pic6.jpg" height="300" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p> Regardless of whether they make a good pet, any turtle that grows too large for the housing you
                        are able to provide is a turtle you should avoid.
                        <br>

                        A classic example is the snapping turtle. All too often available as cute little hatchlings,
                        they just grow too large and bulky for the average turtlekeeper. They are relatively easy to
                        maintain, but their rapid growth and rather nasty disposition make them better fare for zoos and
                        aquariums.
                        <br>

                        Soft-shell turtles also are not recommend for most turtlekeepers. These aggressive turtles can
                        grow very large, and they can inflict a serious bite. They also require specialized care. Close
                        attention must be paid to water quality, and the turtles require a soft sand substrate for
                        hiding. If not properly cared for, this substrate can make it harder to maintain the pristine
                        water conditions required. Health problems, including infection, can set in if conditions are
                        not met for this primarily aquatic turtle.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>7. Notes :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/turtles/pic71.jpg" class="img-fluid" alt=""><br><br><br><br><br><br>
                    <img src="../images/ourservices/turtles/pic72.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-md-8">
                    <p> Of course, I can’t discuss sliders without mentioning the most popular pet turtle: the red-eared
                        slider (Trachemys scripta elegans). This beautiful turtle is known for the red markings near its
                        eyes. What most people fail to realize, however, is that these turtles can eventually measure a
                        foot long. Due to this fact, red-eared sliders have been the most neglected and abandoned
                        turtle. This even led to Florida placing a ban on them as pets in 2007, but certain color
                        morphs, such as albinos and pastels, are still legal to own and sell. Turtle rescue
                        organizations are swamped with these turtles, and many can’t accept any more because it is just
                        too difficult to find them homes. Please be absolutely sure you can properly house an adult if
                        you’re considering a slider, cooter or any turtle for that matter.
                        <br>
                        Mud and Musk Turtles: Perhaps not as beautiful as some other popular turtles, mud turtles
                        (Kinosternon spp.) and musk turtles (Sternotherus spp.) are certainly high on my
                        easy-to-keep-turtle list. Between these two types of turtles there are many to choose from, and
                        most make great starter turtles. Some examples are eastern mud turtles (Kinosternon s.
                        subrubrum), Mississippi mud turtles (K. s. hippocrepis), striped mud turtles (K. baurii), common
                        musk turtles (Sternotherus odoratus) and striped-neck musk turtles (S. minor peltifer).
                        <br>

                        Many mud and musk turtles remain rather small. Some only grow to 4 or 5 inches, allowing you to
                        house them in a smaller tank. Unlike some other aquatic turtles, mud and musk turtles are not
                        big baskers, but you still must provide a basking spot. They might not use it as frequently as
                        other turtles, but they still need it. Although some believe that mud and musk turtles don’t
                        absolutely need UVB lighting because they are not really a basking turtle, there is certainly no
                        harm in providing it. These turtles prefer to crawl along the bottom rather than swim, so deep
                        water is not required.
                        <br>

                        Mud and musk turtles are carnivorous, but they will attempt to eat just about anything you put
                        in front of them. This includes your fingers, so be careful when feeding them. They can be a
                        little nippy.
                        <br>

                        Map Turtles: In my opinion, map turtles (Graptemys spp.) have some of the most distinct patterns
                        and shells of any turtle. I hesitate, however, in recommending them for novice turtle hobbyists.
                        They’re better off left to intermediate or advanced turtlekeepers, but if you follow some basic
                        guidelines, you can be successful with these turtles.
                        <br>

                        In general, their care is similar to that of sliders and painted turtles. Excellent water
                        quality and a proper diet are the secrets to success with these turtles. Map turtles require
                        clean water, and they seem to be less tolerant of poor water conditions than some other turtles.
                        They also tend to be more prone to infections. Map turtles are omnivorous, but each species’
                        diet varies slightly.
                        <br>

                        I have also found that map turtles tend to be shy, so take care in choosing their habitat’s
                        location. A high-traffic area may stress them; but if they’re given time, they tend to become
                        less nervous around you.
                    </p>
                </div>
            </div>

        </div>




        <!--------------Lizards---------------->


        <div class="container-fluid block10" id="block10">
            <div class="row">
                <div class="col-12 ">
                    <h3 id="Lizards">- Lizards :</h3><br>
                    <p>Some reptiles are very tolerant of handling, and others should not be handled unless it’s
                        necessary for husbandry or health. These concerns should be addressed before a rhythmic pattern
                        of interaction can be established. Keep the three Cs in mind when dealing with any reptile:
                        cool, calm and collected. Here are 13 secrets to facilitate the best possible standard of
                        interaction with your pets.
                    </p>

                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>1. Respect :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/lizards/pic1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>
                        Herps are in captivity for our enjoyment, and we owe them every ounce of respect we have to make
                        their lives as pleasant as possible. For us this means that if we are not 100 percent
                        comfortable and confident with the animal we are working with, then we should gain the knowledge
                        with a smaller specimen, a less difficult species to maintain, a less aggressive similar
                        species, or work with the species under the supervision of an experienced herpetoculturist.
                        <br>
                        It can also mean starting with reptiles in our budget regarding three key areas: housing,
                        husbandry and acquisition. Always try to buy the best housing and husbandry tools you can afford
                        first and then figure out what animals fit within your budget. Too often the opposite happens,
                        and the animal suffers.<br>

                        If you address these primary points from the start, your reptile will be happier in the long
                        run, and you will be, too. This creates a more positive interaction on a daily basis, which
                        undoubtedly creates a platform for the best possible relationship with your pet. species, or
                        work with the species under the supervision of an experienced herpetoculturist.

                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>2. Confidence Counts :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/lizards/pic2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>This is key for herpkeepers of all levels. Confidence leads to acute decisions. Acute, confident
                        interaction eliminates fearful jerking of your body, hesitant approaches, and timid assessments
                        of husbandry and health.
                        <br>
                        Body language dictates response. When you are fearful or uncertain, the animal responds in turn.
                        Be certain you are confident with a species before you acquire it. If you’re not, you will not
                        enjoy your pet’s true potential.
                        <br>

                        Some species reputed to be less-than-ideal pets can make exceptional pets if a responsible owner
                        raises them from a hatchling. Reticulated pythons (Python reticulatus) have been labeled as
                        aggressive snakes over the years due to imported animals being fearful and heavily stressed. Yet
                        Jay has several tame retics, including one 20 feet long. Establishing a relationship with a
                        young pet and raising it with care is the best way to have a confident, stable relationship with
                        that pet.</p>
                </div>

            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>3. Break the Hunt :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/lizards/pic3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>
                        Snakes and lizards generally bite for one of two reasons: It’s a feeding response, or it’s a
                        defensive strike. Either can be avoided in most cases. Before you pick up a pet snake from its
                        enclosure, respectfully and confidently let the animal know that there is no food involved. This
                        can generally be done by using an inanimate object to gently touch the snake’s nose, or by
                        simply removing the animal from the enclosure with a small hook.<br>

                        “Break the hunt” is a concept you should keep in mind. Most snakes are ambush predators, and if
                        you don’t break the concentration of the hunt, then you are playing the gamble of predator
                        drive.
                        <br>

                        Whenever you use a hook to remove a snake from an enclosure, be certain to support the first
                        third of the snake’s body with the hook while keeping the last two-thirds fully supported with
                        your other arm and hand. This confident approach keeps the snake comfortable. Never grab a snake
                        or lizard by the end of its tail to remove it from its enclosure. This puts serious strain on
                        the animal. Anytime a reptile is not supported it can reinforce a defensive mentality in the
                        animal and invoke fear.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>4. Wash Your Hands After Handling Reptiles :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/lizards/pic4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>Snakes and lizards have amazing sensory organs. If you introduce your warm hand to an enclosure
                        with the sweet scent of a prey item on it, you have done little more than disguise your hand as
                        a prey item. The easiest way to avoid this is by washing your hands before handling reptiles and
                        between handling different species. This also helps to eliminate the risks of introducing
                        foreign bacteria, germs or parasites to your animals.

                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>5. Avoid Head Restraining Pet Reptiles :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/lizards/pic5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>Head restraining does little more than assure the snake or lizard that you are a predator. If you
                        reinforce that you are a predator to your pet snake or lizard, it will be that much more
                        difficult for the animal to overcome its fear of you, leading to a less enjoyable experience for
                        you both.


                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>6. The Loaded Gun Theory</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/lizards/pic6.jpg" height="300" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p> Until you are completely comfortable with your pet snake or lizard, treat it like a loaded gun.
                        Respect it, be confident, break the hunt, wash your hands and so on, but with newly acquired
                        animals that have shown past aggression (perhaps due to fear), simply keep their heads pointed
                        away from your body.<br>

                        Gently orientating yourself or the reptile away from you slowly allows the animal to become
                        accustomed to the feeling of motion in your hands while reducing the chance of the experience
                        turning negative. Keep in mind that reptiles, especially snakes, follow movements and warmth. If
                        you are moving your limbs or body in front of a snake you are trying to tame, the animal might
                        perceive the motions as a threat.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>7. Buy Captive-Bred Reptiles :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/lizards/pic7.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-md-8">
                    <p> Although there are exceptions, wild-caught animals are best left to experienced herpkeepers
                        looking to establish a species in captivity. If at all possible, buy animals bred in captivity
                        for your newest pet. This increases the chances of the animal being calm right away, and it also
                        reduces possible health concerns, which can accompany wild-collected animals. Subadult and adult
                        animals generally do not acclimate as well as juveniles.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>8. Choose Your Reptiles Wisely :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/lizards/pic8.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-md-8">
                    <p> A plethora of reptiles and amphibians are available to us in our hobby thanks to the efforts of
                        professional breeders, private breeders and hobbyists. This has created a spectrum of choices
                        for the would-be herp owner. These choices encompass intolerant animals, those tolerant of
                        routine maintenance, those that are relatively tolerant, and the relatively exclusive group of
                        animals outwardly social and interactive.<br>Specimens from nearly every size range overlap into
                        each category. Some of the animals that make excellent household pets are leopard geckos
                        (Eublepharis macularius), bearded dragons (Pogona vitticeps), Argentine black-and-white
                        (Tupinambis merianae) or red tegus (Tupinambis rufescens), corn snakes (Elaphe guttata), ball
                        pythons (Python regius), and rosy boas (Lichanura trivirgata). Some larger animals that make
                        great pets are red-tailed boas (Boa constrictor), Burmese pythons (Python molurus bivittatus)
                        and reticulated pythons.<br>

                        Most frogs, most arboreal geckos, African rock pythons (Python sebae) and Nile monitors (Varanus
                        niloticus) are animals that generally do not adapt to handling as readily and should be kept by
                        more experienced people. Some of these animals may be defensive when young, which can lead to
                        occasional nips. They generally outgrow this defensiveness with calm, confident handling and as
                        they gain in size. As always, carefully research any animal you wish to keep, so you can
                        evaluate whether you can meet an animal’s husbandry needs.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>9. Support Fosters Trust :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/lizards/pic9.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-md-8">
                    <p> Always implement safe handling techniques. Holding most snakes or lizards by their tail puts
                        pressure on their spines. Many lizard species shed their tails as a defensive measure, an ordeal
                        that can be very hard on the animal. Avoid handling that can lead to injuries. It is a major
                        factor in establishing a mutually beneficial relationship with your pet.
                        <br>
                        Keep in mind: respect, respect, respect! Support your pet’s body properly, and it will learn to
                        trust that you will always hold it in a comfortable way.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>10. Some Like It Hot :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/lizards/pic10.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-md-8">
                    <p> Reptiles and amphibians are ectothermic, which means that they regulate their body’s temperature
                        using external sources. Whenever holding your pet, keep in mind that the average room
                        temperature is generally much cooler than what most reptiles need to maintain their body
                        temperature. A good general rule of thumb is to limit the pet’s time period out of the cage to
                        less than 30 minutes. Otherwise you may lower the animal’s body temperature too low and
                        potentially risk its health.


                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>11. Let Food Settle Before Handling Reptiles :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/lizards/pic11.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-md-8">
                    <p>Whenever an animal is given a sizeable meal that can’t be digested in a single day, it is best to
                        limit handling. Stress on the abdomen during digestion can provoke regurgitation, and this is
                        harmful to animals for numerous reasons. Stomach acids could do damage, or bacteria from
                        digesting food could travel to more susceptible parts of the body. Do not handle an animal with
                        a visible lump unless it is absolutely required, and always exercise extreme care and caution.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>12. Protect Kids and Pets :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/lizards/pic12.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-md-8">
                    <p>Whenever allowing a child to pet or hold a reptile, adults have a responsibility to protect both
                        the
                        animal and the child. Rough handling by a child can potentially ruin an animal’s trust of
                        people.
                        Animals of all kinds have the potential to bite and scratch — or tail-whip in the case of some
                        lizards — which can potentially harm children or scar their perception of these ectothermic
                        beauties.

                        Never allow children to remove an animal from its enclosure because this is their greatest
                        chance to
                        receive a feeding-response bite. A secondary concern to exposing pets to children is
                        cleanliness. We
                        recommend children less than 18 months be kept away from pets because their immune systems
                        aren’t
                        stabilized or mature. When allowing a child less than 5 years old to pet or touch a reptile,
                        wash
                        the child’s hands before and after to prevent the risk of bacteria affecting the child. As it so
                        happens, poultry and poultry products are much more of a concern than a reptile, but caution
                        should
                        still be exercised.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>13. Educate Yourself About The Reptile You Wish To Keep :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/lizards/pic13.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-md-8">
                    <p>Animals with the potential to be dangerous should be handled by experienced people only. Be
                        smart; it
                        is the responsibility of each individual to assess the risks they are comfortable taking.
                        Uneducated, poorly conceived actions fueled by ego are dangerous — to yourself, to those around
                        you
                        and to other reptilekeepers across the nation.
                        <br>
                        If we do not govern ourselves with maturity, we may lose the choice of keeping some of the most
                        beautiful animals in the world. Venomous animals and crocodilians face hard times ahead because
                        of
                        legislation. Even large constrictors are receiving the ire of many groups due to irresponsible
                        owners allegedly releasing their pets into the wild.
                        <br>

                        Never release a pet into the wild; find a legitimate fellow herper or rescue organization to
                        take
                        your pet. It is time for us to show that we are a responsible community from the ground floor
                        up.
                    </p>
                </div>
            </div>
        </div>




        <!--------------Bunnies---------------->


        <div class="container-fluid block11" id="block11">
            <div class="row">
                <div class="col-12 ">
                    <h3 id="Bunnies">- Bunnies :</h3><br>
                    <p>Aren’t bunnies just the cutest? Although they make great pets and are certainly fun to play with,
                        , some considerations must first be taken into account before deciding to adopt a bunny.


                    </p>

                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>1. Rabbits aren’t the best starter pets for young children :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/rabbits/pic1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>
                        Rabbits are quite delicate and frighten easily. If a rabbit isn’t handled correctly, the rabbit
                        may kick, bite or scratch out of fear. When being picked up, rabbits need full support on their
                        front and hindquarters, otherwise they can seriously injure their spine. Never pick up a rabbit
                        by their ears as this is very painful and cruel.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>2. Not all rabbits get along :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/rabbits/pic2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>Before getting a second rabbit, it’s important that the two rabbits meet on neutral ground to
                        make sure they get along. Most shelters have an area where you can introduce the two animals.
                        Rabbits that are housed in the same cage need to be spayed/neutered to reduce aggressive
                        behaviour and mating.</p>
                </div>

            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>3. Rabbits love to chew :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/rabbits/pic3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>
                        Rabbits don’t know the difference between good and bad things to chew. That’s why any area in
                        the house that your rabbit can access needs to be rabbit proof (i.e., no access to things that
                        can harm them, like electrical cords, books or furniture). Give your rabbit something good to
                        chew on, like cardboard boxes, chewing toys or rabbit-safe chew sticks.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>4. Rabbits need regular exercise :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/rabbits/pic4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>Rabbits need space to run, jump and exercise, ideally in a playpen, outdoor area or
                        rabbit-proofed room. Rabbits with an outdoor play area should be supervised at all times, since
                        they’re vulnerable to predators. For ideas on keeping your rabbit active, check out our tips on
                        giving your pet a mental workout. It’s recommended that rabbits be given several hours for
                        exercise per day.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>5. Rabbits require a well balanced diet :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/rabbits/pic5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>In addition to rabbit pellets, an important part of a rabbit’s diet is grass hay, such as timothy
                        or brome, to keep their intestinal tract healthy. Rabbits need unlimited access to hay at all
                        times. Rabbits also need leafy greens, such as dark leaf lettuces, collard greens, turnip greens
                        and carrot tops.


                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>6. Rabbits need their habitat cleaned regularly</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/rabbits/pic6.jpg" height="300" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p> Rabbits need their cages cleaned once or twice a week to keep their habitat sanitary and odour
                        free. Remember not to use cedar or pine shavings to line their cage, since the fumes can make
                        them sick, and avoid clay cat litters. Choose wood shavings made from aspen.<br>
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>7. Rabbits are indoor pets :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/rabbits/pic7.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-md-8">
                    <p> Rabbits are too vulnerable to predators and too social to be isolated outside. Since rabbits
                        need to be kept indoors, keep in mind that they frighten easily and shouldn’t be placed
                        somewhere too noisy.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>8. Rabbits have special health concerns :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/rabbits/pic8.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-md-8">
                    <p> Make sure you’re familiar with the health conditions that afflict rabbits as well as the warning
                        signs that require emergency veterinary attention (e.g., diarrhea or anorexia). Like any other
                        pet, rabbits need regular health exams from a veterinarian, ideally one that specializes in
                        small mammals.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>9. Grooming and coat care :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/rabbits/pic9.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-md-8">
                    <p>Rabbits need routine brushing to keep their coat clean and free from mats. Use a soft bristle
                        brush to brush their entire coat. Stay away from brushing around their face and belly.Bunnies
                        may pluck their own hair occasionally. Make sure to remove this plucked hair promptly to prevent
                        the rabbit from eating it.
                    </p>
                </div>
            </div>

        </div>




        <!--------------squirrels---------------->


        <div class="container-fluid block12" id="block12">
            <div class="row">
                <div class="col-12 ">
                    <h3 id="squirrels">- Squirrels :</h3><br>
                    <p>Squirrels are often found injured in the wild. Baby squirrels are prone to injury in particular.
                        If you need to care for a wild squirrel, you need to make sure he has proper food, shelter, and
                        veterinary care. Try to get your squirrel to a wildlife rescue as soon as you can. Keeping wild
                        squirrels as pets is not recommended as they do not do well in captivity and it is illegal in
                        most areas. Check the laws in your area before you do anything.
                    </p>

                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>1. Make a shelter for your squirrel :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/squirrels/pic1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>
                        If you find a wild squirrel injured outside and it is legal for you to help the squirrel, then
                        make sure to provide him with a proper shelter. Wild squirrels do not carry rabies as a rule,
                        but it is possible for any warm-blooded animal to be infected so be careful. If you are bitten,
                        clean the wound out with some water and call your doctor for further treatment. Having the
                        squirrel tested for diseases will result in the squirrel's death. However, if you don't have a
                        cage there are other options.
                        <ul>
                            <li> Injured squirrels found in the wild tend to be babies. They often fall from nests or
                                get lost
                                from their mothers. A baby squirrel can be comfortable housed in a small box, such as a
                                shoe
                                box. You should leave the shoebox outside, away from other predators, and keep it open.
                                This
                                way, if he's lost his mother will be able to find him and retrieve him. However, you can
                                keep
                                the shoebox in your garage or a closed off room in your home if leaving the squirrel
                                outdoors is
                                not an option.</li>
                            <li> If you intend the keep the squirrel long-term because a rehabber or wildlife rescue is
                                not an
                                option, you're going to need a lot of time and money. The first step is to get a cage.
                                Adult
                                squirrels need tall cages so they can move around and play. Baby squirrels need smaller
                                cages so
                                they don't climb and end up falling and hurting themselves. If you have an old cat cage
                                or pet
                                carrier, you could use this for a baby squirrel. If it's plastic, the squirrel will chew
                                through
                                it quickly. An old bird cage, at least 3 feet tall, might work very temporarily for an
                                adult
                                squirrel. You can also purchase animal cages of a variety of shapes and sizes at your
                                local pet
                                store. Critter/Ferret nations are recommended for the small bar spacings and size.</li>

                        </ul>


                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>2. Provide a nest box and bedding material :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/squirrels/pic2.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p> After finding a suitable container for the squirrel, you'll need to give him nest and bedding
                        material. This helps him stay warm and comfortable and also mimics some of the conditions of his
                        natural habitat.
                        <ul>
                            <li>
                                Squirrels enjoy building a nest for sleeping. Do not use cardboard as it dries out the
                                skin and
                                mucous membranes. Many pet stores sell nest boxes for birds for relatively low prices.
                                These
                                could work to keep your squirrel feeling warm and safe.
                            </li>
                            <li>Squirrels need to have a lot of bedding and padding to keep warm. However, be careful of
                                what
                                kind of materials you're using. Use old clothing, like old cotton or fleece shirts.
                                However,
                                stay away from towels or other items made of terrycloth or something similar. Squirrels
                                can
                                easily get their claws stuck in such materials, leading to injury.
                            </li>
                        </ul>

                    </p>
                </div>

            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>3. Keep baby squirrels warm :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/squirrels/pic3.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>
                        If you found an injured baby squirrel, he needs to stay warm in order to survive. Wrap a hot
                        water bottle or a heating pad in flannel or a similar material. Place it in the box or cage
                        where you're keeping the baby squirrel. Do not cover the squirrel in any fabrics and do not put
                        water in without wrapping it up first. This could cause the squirrel to overheat. If you use a
                        heating pad, ensure it is non-auto-shut-off and place it half UNDER the box.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>4. Provide toys and other supplies :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/squirrels/pic4.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>After your squirrel has settled in, it's nice to give him some toys and other supplies for his
                        entertainment. The transition from the wild to someone's home will be jarring. You want to make
                        sure your squirrel is entertained.
                        <ul>
                            <li>
                                Small stuffed toys for children can be great toys for squirrels. Just make sure to
                                remove any
                                plastic parts, like plastic eyes or noses, before letting the squirrel play with it.
                                Only give a
                                squirrel stuffed toys that use natural stuffing. Squirrels can choke on beans or
                                bead-like
                                materials sometimes used to stuff toys.
                            </li>
                            <li>
                                Hanging toys, like mobiles or cat toys with feathers on the end, can also be fun for
                                squirrels.
                                If you're keeping your squirrel until release, consider installing some kind of perch in
                                his
                                cage if he's older. Squirrels like to be able to climb. You can buy bird perches at a
                                local pet
                                store and install them in your squirrel's cage.
                            </li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>5.
                        Feed your squirrel a proper diet :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/squirrels/pic5.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p>You need to make sure your squirrel has a healthy, balanced diet. As squirrels are not
                        traditionally kept as pets, this can be somewhat tricky.
                        <ul>
                            <li> Do not attempt to feed a baby squirrel on your own. Baby squirrels need specific
                                vitamins and
                                minerals. Feeding a baby squirrel formula or milk could result in the squirrel dying.
                                Take your
                                baby squirrel to a vet or wildlife rescue as soon as you can. The workers there will
                                know how to
                                feed him properly. In the event you take him back home with you, you can learn how to
                                care for
                                the baby online at TheSquirrelBoard.com. </li>
                            <li> They do make specially designed food for squirrels. It can be tricky to find, however,
                                as it may
                                be sold at your local pet store. Some states do not allow people to keep squirrels as
                                pets. You
                                may be able to order squirrel food online, but it might take a few days. In the event
                                you cannot
                                get squirrel food quickly, TheSquirrelBoard.com has recipes to make temporary formula.
                            </li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>6. Provide plenty of water</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/squirrels/pic6.jpg" height="300" class="img-fluid" alt="">
                </div>
                <div class="col-md-8">
                    <p> Keep a bowl of water in your squirrels cage or enclosure. Squirrels need plenty of water for
                        their health and wellbeing. You can either leave water in a bowl or use a bottle, like you would
                        in a hamster cage. If you're getting a bottle, make sure you use a glass bottle. Some squirrels
                        chew through plastic.[11]
                        If you're giving water to a baby squirrel, make sure any bowls you use are not too big. You
                        would not want a baby squirrel to accidentally drown in his water bottle. You can place rocks or
                        marbles at the bottom and fill the bowl to just halfway up to the marbles so he doesn’t drown.
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>7. Check your squirrel for wounds and injuries :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/squirrels/pic7.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-md-8">
                    <p> If you found a squirrel in the wild, he may be injured. You should carefully assess a squirrel
                        for injury and get him veterinary care if you see any injuries.
                        <ul>
                            <li> Find a safe spot in your home with good lighting. Stay away from children or other
                                pets. Wear
                                heavy, protective gloves when handling a wild animal. You should also wear a long sleeve
                                coat.
                                If a squirrel has not been handled before, he may bite or scratch. Squirrels are cleaner
                                than
                                most other animals. Just rinse out the cut and go about your business. </li>
                            <li> Keep a basin of warm water and a few clean washcloths on hand. Check the face, nose,
                                and mouth
                                for dried blood. If you see any parasites, like fleas or ticks, remove them. Parasites
                                should be
                                killed if still alive to avoid infecting other pets in your home. If you need to wash
                                any blood,
                                wring out the rag thoroughly and move it gently over the squirrel's fur.</li>
                            <li> Pay attention to your squirrel's limbs. Lets and feet may be twisted awkwardly or limp.
                                Baby
                                squirrels are especially prone to injury from falling out of a tree or nest.
                                If your squirrel is injured, contact a wildlife rehabber and/or vet IMMEDIATELY.</li>
                        </ul>
                    </p>
                </div>
            </div>
            <div class="row item2">
                <div class="col-12 mb-5">
                    <h5>8. Encourage exercise :</h5>

                </div>
                <div class="col-md-4">

                    <img src="../images/ourservices/squirrels/pic8.jpg" class="img-fluid" alt="">

                </div>
                <div class="col-md-8">
                    <p>Squirrels need a lot of exercise. If you plan to keep your squirrel for awhile, you need to make
                        sure he spends time building his muscles.
                        <ul>
                            <li>Allow your squirrel access to one room of your house for at least an hour a day. Make
                                sure you
                                remove anything breakable or anything you do not want damaged. Allow your squirrels to
                                run,
                                climb, and play in this room.</li>
                            <li> Do not allow the squirrel outside without a cage. Hawks and other predators are faster
                                than you
                                and can make a meal out of the baby before you can react. Also, the baby may get spooked
                                and run
                                away, to never return, and thus die due to not knowing how to fend for himself.</li>
                            <li>If you're keeping your squirrel longer than a week or so, install some perches in his
                                cage. As
                                stated earlier, bird perches work well for a squirrel cage. They should come with
                                manufacturer's
                                instructions for set up.</li>
                        </ul>
                    </p>
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



    <script src="../javascript/services.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
</body>

</html>