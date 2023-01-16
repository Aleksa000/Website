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

    <link rel="stylesheet" href="assets/projekat/css/chart.css">

    <link rel="stylesheet" href="assets/projekat/https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="assets/projekat/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="assets/projekat/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="https://raw.github.com/gist/3227578/2f19fbe41d222c0e338293c5021355c1ee116607/jdep.js"></script>
    <script src="jquery.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="https://rawgit.com/moment/moment/2.2.1/min/moment.min.js"></script>
</head>

<div class="main-layout ">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="assets/projekat/images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <body>
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
                                        <li class="active"> <a href="home">Home</a> </li>
                                        <li> <a href="about">About</a> </li>
                                        <li><a href="brand">Shop</a></li>
                                        <li><a href="special">Specials</a></li>
                                        <li> <a href="report"> Report</a></li>
                                        <li><a href="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

    <figure class="highcharts-figure">
        <div id="container"></div>
        <p class="highcharts-description">
            Pie chart showing antivirus sales for the month of December
        </p>
    </figure>

    <script>
        Highcharts.chart('container', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Sales in december 2021'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{
                name: 'Sales',
                colorByPoint: true,
                data: [{
                    name: 'Russonet',
                    y: 41,
                    sliced: true,
                    selected: true
                }, {
                    name: 'SafetyMo',
                    y: 20
                }, {
                    name: 'myDefence',
                    y: 17
                }, {
                    name: 'Ace',
                    y: 10
                }, {
                    name: '10X',
                    y: 7
                }, {
                    name: 'Other',
                    y: 6
                }]
            }]
        });

    </script>
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