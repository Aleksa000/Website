<?php


class Signup extends Controller
{

    function index()
    {


        $data['page_title'] = "Signup";
        if(isset($_POST['email']))
        {
            $user = $this->LoadModel("user");
            $user->signup($_POST);

        }elseif(isset($_POST["username"]) && !isset($_POST["username"]))
        {
            $user = $this->LoadModel("user");
            $user->login($_POST);

        }
        $this->view("projekat/signup", $data);

    }


}