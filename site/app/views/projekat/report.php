<?php
/* Database connection settings */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'dbpa';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);


$value1 = 0;
$value2 = 0;
if(isset($_POST['date_send'])) {


    $date_from = $_POST['date_from'];
    $date_to = $_POST['date_to'];
// $value1 = 0;


// $value2 = 0;

    if ($date_from == "2022-01") {
        $value1 = 1;
    }

    if ($date_to == "2022-01") {
        $value2 = 1;
    }
    if ($date_from == "2022-02") {
        $value1 = 2;
    }

    if ($date_to == "2022-02") {
        $value2 = 2;
    }
    if ($date_from == "2022-03") {
        $value1 = 3;
    }

    if ($date_to == "2022-03") {
        $value2 = 3;
    }
    if ($date_from == "2022-04") {
        $value1 = 4;
    }

    if ($date_to == "2022-04") {
        $value2 = 4;
    }
    if ($date_from == "2022-05") {
        $value1 = 5;
    }
    if ($date_to == "2022-05") {
        $value2 = 5;
    }
    if ($date_from == "2022-06") {
        $value1 = 6;
    }
    if ($date_to == "2022-06") {
        $value2 = 6;
    }
    if ($date_from == "2022-07") {
        $value1 = 7;
    }
    if ($date_to == "2022-07") {
        $value2 = 7;
    }
    if ($date_from == "2022-08") {
        $value1 = 8;
    }
    if ($date_to == "2022-08") {
        $value2 = 8;
    }
    if ($date_from == "2022-09") {
        $value1 = 9;
    }

    if ($date_to == "2022-09") {
        $value2 = 9;
    }

    if ($date_from == "2022-10") {
        $value1 = 10;
    }
    if ($date_to == "2022-10") {
        $value2 = 10;
    }
    if ($date_from == "2022-11") {
        $value1 = 11;
    }
    if ($date_to == "2022-11") {
        $value2 = 11;
    }
    if ($date_from == "2022-12") {
        $value1 = 12;
    }
    if ($date_to == "2022-12") {
        $value2 = 12;
    }

    $russonet = '';
    $safetymo = '';

//query to get data from the table
    $sql = "SELECT * FROM `sale` WHERE dates BETWEEN $value1 AND $value2  ";
    $result = mysqli_query($mysqli, $sql);

//loop through the returned data
    while ($row = mysqli_fetch_array($result)) {

        $russonet = $russonet . '"' . $row['russonet'] . '",';
        $safetymo = $safetymo . '"' . $row['safetymo'] . '",';
    }

    $russonet = trim($russonet, ",");
    $safetymo = trim($safetymo, ",");
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
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
    <title>Reports</title>

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
                                        <li> <a href="statistics"> Statistics</a></li>
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


    <?php
    if((isset($_SESSION["login"]) && $_SESSION["login"] == "OK")){
        $a=$_SESSION['var'];
    }
    if((isset($_SESSION["login"]) && $_SESSION["login"] == "OK" && $a=="admin"))://ako nije admin nece videti nista
        ?>
        <div class="chart-header">
            <form method="post">

                <h3 class="date_head"> &nbsp Monthly sales</h3>
                <label for="date_from">&nbsp Date from</label>
                <input type="month" value="2022-01" name="date_from" id="date-from" class="helper">
                <label for="date_to">Date to</label>
                <input type="month" name="date_to" value="2022-12" id="date-to" class="helper">
                <input style="border-radius: 8px; background: #ffc107; border-color: transparent;font-size: 18px;" type="submit" name="date_send" data-inline="true" value="Submit" class="helper">

            </form>
        </div>
        <canvas id="chart" style="width: 200%; height: 150vh; background: #89cff0; border: 1px solid #555652; margin-top: 10px;"></canvas>

        <script>
            var ctx = document.getElementById("chart").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['<?php if ($date_from=="2022-01"){echo "January";} if ($date_from=="2022-02"){echo "February";} if ($date_from=="2022-03"){echo "March";} if ($date_from=="2022-04"){echo "April";} if ($date_from=="2022-05"){echo "May";} if ($date_from=="2022-06"){echo "Jun";}if ($date_from=="2022-07"){echo "July";}if ($date_from=="2022-08"){echo "August";}if ($date_from=="2022-09"){echo "September";}if ($date_from=="2022-10"){echo "October";}if ($date_from=="2022-11"){echo "November";}if ($date_from=="2022-12"){echo "December";}?>'
                        ,''
                        ,''
                        ,''
                        ,''
                        ,''
                        ,''
                        ,''
                        ,''
                        ,''
                        ,''
                        ,'<?php if ($date_to=="2022-12" && $date_from=="2022-01"){echo "December";} ?>'
                    ],

                    datasets:
                        [{
                            label: 'RUSSONET',
                            data: [<?php echo $russonet; ?>],
                            backgroundColor: 'transparent',
                            borderColor:'#8b0000',
                            borderWidth: 3
                        },

                            {
                                label: 'SafetyMo',
                                data: [<?php echo $safetymo; ?>],
                                backgroundColor: 'transparent',
                                borderColor:'#00008B',
                                borderWidth: 3
                            }]
                },

                options: {
                    scales: {scales:{yAxes: [{beginAtZero: false}], xAxes: [{autoskip: true, maxTicketsLimit: 20}]}},
                    tooltips:{mode: 'index'},
                    legend:{display: true, position: 'top', labels: {fontColor: 'rgb(255,255,255)', fontSize: 16}}
                }
            });
        </script>

    <?php else: ?>
        <div id="notallowed">
            <h1 id="h1allow">
                You don't have permission to access this content, sorry please return to <a id="homedugme" href="home"> home page</a>
            </h1>
            <img id="imagenotallow" src="assets/projekat/images/odlicno.png" alt="img" />
        </div>
    <?php endif; ?>

    <style>
        #imagenotallow{
            margin-left: 350px;
        }
        #h1allow{
            text-align: center;
            margin-top: 100px;
        }
        #notallowed{
            height: 600px;
        }
        #homedugme{
            color:blue;
        }
    </style>
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