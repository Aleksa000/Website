<?php

$db = mysqli_connect("localhost","root","","reviewdb");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit_review']))
{
    $review_name = $_POST['review_name'];
    $review_product = $_POST['review_product'];
    $review_message = $_POST['review_message'];


    $insert = mysqli_query($db,"INSERT INTO `reviewstb`(`review_name`, `review_product`,`review_message`) VALUES ('$review_name','$review_product','$review_message')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "<script>alert('Thanks for your review, we hope you like our products')</script>";
        echo "<script>window.location = 'home'</script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">


<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title><?php /** @var TYPE_NAME $data */
        echo $data['page_title']. " | " .WEBSITE_TITLE?></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/projekat/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="assets/projekat/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="assets/projekat/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="assets/projekat/images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="assets/projekat/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="assets/projekat/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/projekat/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/projekat/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/projekat/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="assets/projekat/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="assets/projekat/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

</head>

<style>
    #adminlogin{
        display:inline-block;
        padding:0.7em 1.7em;
        margin-left: 60px;
        border-radius:0.5em;
        box-sizing: border-box;
        text-decoration:none;
        font-family:'Roboto',sans-serif;
        font-weight:400;
        color:#FFFFFF;
        background-color:#D10000;
        box-shadow:inset 0 -0.6em 1em -0.35em rgba(0,0,0,0.17),inset 0 0.6em 2em -0.3em rgba(255,255,255,0.15),inset 0 0 0em 0.05em rgba(255,255,255,0.12);
        text-align:center;
        position:relative;
    }
</style>
<!-- body -->

<body class="main-layout ">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="assets/projekat/images/loading.gif" alt="#" /></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="home"><img src="assets/projekat/images/logo.png" alt="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li> <a href="about">About</a> </li>
                                    <li><a href="shop">Shop</a></li>
                                    <li><a href="special">OnSale</a></li>
                                    <li> <a href="statistics"> Statistics</a></li>
                                    <li><a href="report">Reports</a></li>


                                    <?php if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")): ?>
                                        <li><a href="login"><i class="fa fa-user-o" aria-hidden="true"></i>
                                                <?php
                                                if(!(isset($_SESSION["login"]) && $_SESSION["login"] == "OK")) {
                                                    echo " Log in";
                                                }else{
                                                    $a=$_SESSION['var'];
                                                    echo $a;
                                                }

                                                ?>
                                            </a></li>
                                    <?php else: ?>
                                    <li><a href="logout"><i class="fa fa-sign-out" aria-hidden="true"></i> <?php
                                            $a=$_SESSION['var'];
                                                echo $a;
                                            ?></a></li>
                                        <!-- prebacuje u logoutphp sto korisnik ne vidi -->
                                    <?php endif; ?>

                                    <li><a href="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>


                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <?php
                if((isset($_SESSION["login"]) && $_SESSION["login"] == "OK")){
                    $a=$_SESSION['var'];
                }
                if((isset($_SESSION["login"]) && $_SESSION["login"] == "OK" && $a=="admin"))://provera admina i korisnika
                    ?>
                    <a href="login" id="adminlogin">Login</a>
                <?php endif; ?>
                <div class="col-md-6 offset-md-6">
                    <div class="location_icon_bottum">
                        <ul>
                            <li><img src="assets/projekat/icon/call.png" />+381  0901  090</li>
                            <li><img src="assets/projekat/icon/email.png" />antivirushop@gmail.com</li>
                            <li><a href="https://www.google.com/maps/place/Bulevar+despota+Stefana+31"><img src="assets/projekat/icon/loc.png"/>Location</li></a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
<!-- end header -->
    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="assets/projekat/images/banner.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>Best protection </span>
                            <h1>up to 25% Sale</h1>
                            <p>We present next generation Antivirus, no more fear of Trojan Horse Virus.
                                <br> full clean your computer and free up the memory/RAM</p>
                            <a class="buynow" href="shop">Buy Now</a>
                            <ul class="social_icon">
                                <li> <a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="assets/projekat/images/banner02.gif" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>Protect your data </span>
                            <h1>50% off <br> with promo code</h1>
                            <p>Clean your computer with brand new antivirus technology,
                                <br> Boost up your device, get rid of unnecessary cache memory that slows down your computer</p>
                            <a class="buynow" href="shop">Buy Now</a>
                            <ul class="social_icon">
                                <li> <a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="assets/projekat/images/banner01.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>Feel safe </span>
                            <h1>Make internet surfing safe</h1>
                            <p>Do whatever you want on internet and don't even think about virus,
                                <br> You can rely on us !</p>
                            <a class="buynow" href="shop">Buy Now</a>
                            <ul class="social_icon">
                                <li> <a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="assets/projekat/images/about.png" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_box">
                        <h3>About Us</h3>
                        <span>Our Antivirus Shop</span>
                        <p>We are trying to make the internet a safer place, we are also trying to provide all users of today’s technology with surf protection and that is why we have the best antivirus prices you will ever find. We were founded in 2019. as a small company that has proven itself on the market and that is why we now offer a large number of different antivirus brands !</p>

                    </div>

            </div>
        </div>
    </div><!-- end about -->
    </div>
    <!-- brand -->
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="assets/projekat/images/1.png" alt="img" />
                            <h3>$<strong class="red">35</strong></h3>
                            <span>Ace</span>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="assets/projekat/images/2.png" alt="img" />
                            <h3>$<strong class="red">60</strong></h3>
                            <span>SharpEdge</span>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="assets/projekat/images/4.png" alt="img" />
                            <h3>$<strong class="red">19.99</strong></h3>
                            <span>(BEST OFFER)</span>
                            <span>Russonet</span>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="brand_box">
                            <img src="assets/projekat/images/5.png" alt="img" />
                            <h3>$<strong class="red">85</strong></h3>
                            <span>SafetyMo</span>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="assets/projekat/images/6.png" alt="img" />
                            <h3>$<strong class="red">18</strong></h3>
                            <span>J.Green</span>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 mrgn">
                        <div class="brand_box">
                            <img src="assets/projekat/images/9.png" alt="img" />
                            <h3>$<strong class="red">25</strong></h3>
                            <span>Omega</span>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                            <i><img src="assets/projekat/images/star.png"/></i>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <a  href="shop" class="read-more">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end brand -->
    <!-- clients -->
    <div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>What our clients say about our products</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>George93<br><strong class="ornage_color">Russonet</strong></h3>
                                    <p>Great price-quality ratio, I didn't even realize how many viruses I had on my computer, now I can surf safely and easily.</i>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="assets/projekat/icon/testimonial_qoute.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>Mark<br><strong class="ornage_color">SafetyMo</strong></h3>
                                    <p>I did spent few bucks more but trust me when i say, I am completely satisfied, my pc runs faster, before SafetyMo i was waiting for more than 10 minutes for my computer to start up, i browse safe and the background usage of RAM is extremely low, and it can always stay turned on.  </i>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="assets/projekat/icon/testimonial_qoute.png">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>Ann<br><strong class="ornage_color">Minotaur</strong></h3>
                                    <p>I had an issue with google chrome and it turned out to be a problem because my computer had a virus. Bought antivirus from AntiviruShop and now i can surf all the time! </i>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="assets/projekat/icon/testimonial_qoute.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- end clients -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Review our products</h2>
                    </div>
                    <form method="POST" class="main_form">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input required class="form-control" placeholder="Your name" type="text" name="review_name">
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <input required class="form-control" placeholder="Product name" type="text" name="review_product">
                            </div>
                            <div class="col-md-12">
                                <textarea required class="textarea" placeholder="Your review" name="review_message"></textarea>
                            </div>
                            <div class=" col-md-12">
                                <button class="send" name="submit_review">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->
    <!-- footer -->
<footer>
    <div id="contact" class="footer">
        <div class="container">
            <div class="row pdn-top-30">
                <div class="col-md-12 ">
                    <div class="footer-box">
                        <div class="headinga">
                            <h3>Address</h3>
                            <span>Bulevara Despota Stefana 31a</span>
                            <p>+381  0901  090
                                <br>antivirushop@gmail.com</p>
                        </div>
                        <ul class="location_icon">
                            <li> <a href="https://www.facebook.com/"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="https://twitter.com/?lang=en"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <div class="menu-bottom">
                            <ul class="link">
                                <li> <a href="home">Home</a></li>
                                <li> <a href="about">About</a></li>
                                <li> <a href="shop">Shop </a></li>
                                <li> <a href="special">Specials  </a></li>
                                <li> <a href="statistics"> Statistics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>© 2019 All Rights Reserved. Design By<a href="https://html.design/"> ESET NOD32</a></p>
            </div>
        </div>
    </div>
</footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="assets/projekat/js/jquery.min.js"></script>
    <script src="assets/projekat/js/popper.min.js"></script>
    <script src="assets/projekat/js/bootstrap.bundle.min.js"></script>
    <script src="assets/projekat/js/jquery-3.0.0.min.js"></script>
    <script src="assets/projekat/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="assets/projekat/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/projekat/js/custom.js"></script>
    <!-- javascript -->
    <script src="assets/projekat/js/owl.carousel.js"></script>
    <script src="assets/projekat/https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>
