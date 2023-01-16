<style>
    #cart_count{
        text-align: center;
        padding: 0 0.9rem 0.1rem 0.9rem;
        border-radius: 3rem;
    }

    .price-details h6{
        padding: 3% 2%;
    }
    .navbar-nav{
        margin-left:75%
    }
    #ataghome{
        color:white;
        text-decoration: none;
    }
</style>
<header id="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="cart" class="navbar-brand">
            <h3 class="px-5">
                <a id="ataghome" href="home"><img src="assets/projekat/images/strelica3.png"/>HomePage</a>
            </h3>
        </a>
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target = "#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="mr-auto"></div>
            <div class="navbar-nav">
                <a href="cart" class="nav-item nav-link active">
                    <h5 class="px-5 cart">
                        <i class="fa fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }
                        //racuna koliko je prozivoda ubaceno u korpu
                        ?>
                    </h5>
                </a>
            </div>
        </div>

    </nav>
</header>



