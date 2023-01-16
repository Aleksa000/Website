<?php


class Login extends Controller
{

    function index()
    {

        $data['page_title'] = "Login";



        $data['page_title'] = "LogIn";
        $this->view("projekat/login", $data);

    }


}