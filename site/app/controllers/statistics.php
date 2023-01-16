<?php


class statistics extends Controller
{

    function index()
    {

        $data['page_title'] = "Statistics";



        $data['page_title'] = "Statistics";
        $this->view("projekat/statistics", $data);

    }


}