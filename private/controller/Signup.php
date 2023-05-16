<?php

// Signup Controller Class


class Signup extends Controller
{
    public function index()
    {

        $errors = [];

        if (count($_POST) > 0) {

            $user = new User();

            if ($user->validate($_POST)) {

                $_POST['date'] = date("y-m-d H:i:s");

                $user->insert($_POST);

                $this->redirect("login");


            } else {
                $errors = $user->errors;
            }

        }

        $this->view("signup", ['errors' => $errors]);
    }
}


?>