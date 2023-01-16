<?php

Class Home extends Controller
{
    function index ()
    {
//        $DB = new Database();
//        $data['result']= $DB->read("select * from images");
        $data['page_title'] = "Home";
//        show($data[0]->image);
//        show($a);$a,$b,$c= ''
//        show($b);
//        show($c);
//        $image_class = $this->loadModel("image_class");
//        show($image_class);
       $this->view("projekat/index",$data);
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