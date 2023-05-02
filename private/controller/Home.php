<?php

// Home Controller Class


class Home extends Controller
{
    public function index($data = '')
    {
        echo "This is home controller".$data;
    }
}


?>