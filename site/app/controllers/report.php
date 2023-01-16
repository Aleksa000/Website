<?php


class report extends Controller
{

    function index()
    {

        $data['page_title'] = "Report";



        $data['page_title'] = "Report";
        $this->view("projekat/report", $data);

    }


}