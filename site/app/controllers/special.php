<?php


class Special extends Controller
{

    function index()
    {


        $data['page_title'] = "Specials";
        $this->view("projekat/special", $data);

    }


}