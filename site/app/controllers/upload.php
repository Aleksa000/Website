<?php


class Upload extends Controller
{

    function index()
    {


        header("Location: http://localhost/login");
        die();
    }
    function image()
    {

        $user = $this->loadModel("user");
        if ($result = $user->check_logged_in())
        {

        }
        $data['page_title'] = "Upload";
        $this->view("projekat/upload", $data);

    }

}