<?php

function component($productname,$productprice,$productimg,$productid){
    $element = "
            <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
           <form action=\"shop\" method=\"post\">
               <div class=\"card shadow\">
                   <div>
                       <img src=\"$productimg\" alt=\"image1\" class=\"img-fluid card-img-top\">
                   </div>
                   <div class=\"card-body\">
                       <h5 class=\"card-title\">$productname</h5>
                       <h6>
                           <i><img src=\"assets/projekat/images/star.png\"/></i>
                           <i><img src=\"assets/projekat/images/star.png\"/></i>
                           <i><img src=\"assets/projekat/images/star.png\"/></i>
                           <i><img src=\"assets/projekat/images/star.png\"/></i>
                           <i><img src=\"assets/projekat/images/star02.png\"/></i>
                       </h6>
                       <p class=\"card-text\">
                           All our products are original
                       </p>
                       <h5>
                           <small><s class=\"text-secondary\">$79.99</s></small>
                           <span class=\"price\">$$productprice</span>
                       </h5>
                       <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></button>
                       <input type='hidden' name='product_id' value='$productid'>                     
                   </div>
               </div>
           </form>
        </div>
    
    ";
    echo $element;
}
function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: AntiviruShop</small>
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <a id=\"helpgod\" href=\"shop\">Keep shopping</a>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}


