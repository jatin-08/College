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

                $arr['firstname'] = $_POST['firstname'];
                $arr['lastname'] = $_POST['lastname'];
                $arr['email'] = $_POST['email'];
                $arr['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $arr['gender'] = $_POST['gender'];
                $arr['rank'] = $_POST['rank'];
                $arr['date'] = date("y-m-d H:i:s");

                $user->insert($arr);

                $this->redirect("login");


            } else {
                $errors = $user->errors;
            }

        }

        $this->view("signup", ['errors' => $errors]);
    }
}


?>