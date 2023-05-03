<?php

// Main Controller Class


class Controller
{
    public function view($view, $data = array())
    {
        extract($data);

        if (file_exists(VIEW . $view . ".view.php")) {
            require(VIEW . $view . ".view.php");
        } else {
            require(VIEW . "404.view.php");
        }
    }
}


?>