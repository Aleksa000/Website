<?php


class logout extends Controller
{

    function index()
    {

        $data['page_title'] = "Logout";



        $data['page_title'] = "LogOut";
        $this->view("projekat/logout", $data);

    }


}