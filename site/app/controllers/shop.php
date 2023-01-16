<?php

Class shop extends Controller
{
    function index ()
    {
        $data['page_title'] = "shop";
        $this->view("projekat/shop",$data);
    }

//    function view($views){
//
//        if (file_exists("../app/views/" . $views . ".php")) {
//            include "../app/views/" . $views . ".php";
//
//        }else{
//            include "../app/views/404.php";
//        }
//    }
}