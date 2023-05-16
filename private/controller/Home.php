<?php

// Home Controller Class


class Home extends Controller
{
    public function index()
    {
        $errors = [];

        if (!Auth::logged_in()) {

            $this->redirect("login");

        }
        $this->view("home", ['errors' => $errors]);

    }
}


?>