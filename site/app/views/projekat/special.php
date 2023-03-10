<!DOCTYPE html>
<html lang="en">
   <head>
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
      <link rel="stylesheet" href="assets/projekat/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/projekat/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/projekat/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="assets/projekat/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="assets/projekat/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="assets/projekat/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout special-page">
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
                           <div class="logo"> <a href="home"><img src="assets/projekat/images/logo.png" alt="#"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li class="active"> <a href="home">Home</a> </li>
                                 <li> <a href="about">About</a> </li>
                                 <li><a href="shop">Shop</a></li>
                                  <li> <a href="statistics"> Statistics</a></li>
                                  <li><a href="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
                                  <li class="last">
                                  </li>


                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 offset-md-6">
                     <div class="location_icon_bottum">
                        <ul>
                           <li><img src="assets/projekat/icon/call.png"/>+381  0901  090</li>
                           <li><img src="assets/projekat/icon/email.png"/>antivirushop@gmail.com</li>
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
                        <span>SharpEdge</span>
                        <h1>We encourage you to try SharpEdge</h1>
                        <p>"SharpEdge" finds every possible virus out there.
                           <br>The price of this antivirus on our website is best on the market, and if you find cheaper feel free to contact us and we will sell you at the best price! </p>
                        <a class="buynow" href="shop">Buy Now</a>
                        
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="assets/projekat/images/baner1.gif" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <span>Russonet</span>
                        <h1>Now on sale !</h1>
                        <p>"Russonet" is one of the best antivirus software out there.
                           <br> Try it before the deal is off</p>
                        <a class="buynow" href="shop">Buy Now</a>
                        
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
                           <p>+381  0901  090<br>antivirushop@gmail.com</p>
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
                  <p>?? 2019 All Rights Reserved. Design By<a href="https://html.design/"> ESET NOD32</a></p>
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
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 
   </body>
</html>