<?php

//zapocni sesiju
require_once('component.php');
require_once('CreateDb.php');

//create instance of Createdb class
$database = new CreateDb("Productdb","Producttb");
$db = mysqli_connect("localhost","root","","Productdb");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'shop'</script>";
        }else{
//provera da li je vec uneto
            $count = count($_SESSION['cart']);

            $_SESSION['cart'][] = array(
                'product_id' => $_POST['product_id']

            );


        }//ako nije vec dodao u korpu onda dodaj

    }else{

        $item_array = array(
            'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;//pravi sesiju u koje stavljamo proizvode
    }
}




?>
<!doctype html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <!-- Font Awesome-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Boostrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="assets/projekat/https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>
<style>
    body{
        background: #e8f4f8;
    }
    img{
        max-width: 100%;
        height: auto;
    }
    .card{
        margin-top: 10px;
    }

</style>
<body>

<?php
require_once("header.php");
?>




<div class="container">
    <div class="row text-center py-5">
        <div data-role="main" class="ui-content">
            <form method="post">
                <div data-role="rangeslider">
                    <h5>Sort by price</h5>
                    <label for="price-min">Minimum:</label>
                    <input type="range" name="price-min" id="price-min" value="0" min="0" max="80" oninput="this.nextElementSibling.value = this.value">
                    <output>0</output>$
                    <br>
                    <label for="price-max">Maximum:</label>
                    <input type="range" name="price-max" id="price-max" value="0" min="0" max="80" oninput="this.nextElementSibling.value = this.value">
                    <output>0</output>$
                </div>
                <input style="border-radius: 8px; background: #ffc107; border-color: transparent;font-size: 18px;" type="submit" name="value-range" data-inline="true" value="Submit">
            </form>
            <br>
            <form name="opcije" method="POST">
                <select name="myselect" id="myselect" onchange="this.form.submit()">
                    <option hidden value="">Choose:</option>
                    <option value="1" >Lowest to highest</option>
                    <option value="2">Highest to lowest</option>
                </select>
            </form>
        </div>
        <?php

        if (isset($_POST['myselect'])){

            $sort_option = "";

            if ($_POST['myselect']==1) {
                $sort_option = "ASC";
            }else if($_POST['myselect']==2){
                $sort_option = "DESC";
            }//kod chose od opadajucem ka rastucem nizu


            if($_SESSION['val']==1) {//var dobija vr 1 tek kada odaberem koju cenu hocu kada biramo vr
                $query = "SELECT * FROM producttb ORDER BY product_price $sort_option";
                $query_run = mysqli_query($db, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);

                    }//sortira u zavisnoti da li je vece ka manje ili manje ka vece al samo po product price
                }
            }else{
                $query = "SELECT * FROM producttb WHERE product_price BETWEEN '".$_SESSION['min']."' AND '".$_SESSION['max']."' ORDER BY product_price $sort_option";
                $query_run = mysqli_query($db, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
                        component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);

                    }//izbaci sve proizvode koji spadaju u taj rang
                }

           }

        }

        if (isset($_POST['value-range'])) {

            $query = "SELECT * FROM producttb WHERE product_price BETWEEN '".$_POST["price-min"]."' AND '".$_POST["price-max"]."'";
            $results = mysqli_query($db, $query);

            $_SESSION['min']=$_POST['price-min'];
            $_SESSION['max']=$_POST['price-max'];

            $total_row = mysqli_num_rows($results);

            if($total_row > 0){
                $_SESSION['val']=2;

                while($row=mysqli_fetch_assoc($results)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }
            }else{
                echo"There is no product of this price range";
            }
//ako nista nije izabrano
        }
        if (!isset($_POST['myselect'])){
            if(!isset($_POST['value-range'])) {
                $_SESSION['val']=1;

                $result=$database->getData();
                while($row=mysqli_fetch_assoc($result)){
                    component($row['product_name'],$row['product_price'],$row['product_image'],$row['id']);
                }//sve proizvode iz baze ubacuje na sajt iz baze u component
           }
        }



        ?>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>