<?php

Class About extends Controller
{
    function index ()
    {
        $data['page_title'] = "About";
        $this->view("projekat/about",$data);
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