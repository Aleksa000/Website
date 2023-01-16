<?php

Class Controller{

    protected function view($views,$data=[]){

        if (file_exists("../app/views/" . $views . ".php")) {
            include "../app/views/" . $views . ".php";

        }else{
            include "../app/views/404.php";
        }
    }

    protected function loadModel($model){

        if (file_exists("../app/models/" . $model . ".php")) {
            include "../app/models/" . $model . ".php";
            return $model = new $model();

        }
        return false;
    }

}