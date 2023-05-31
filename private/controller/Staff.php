<?php

// STAFF Controller Class


class Staff extends Controller
{
    public function index()
    {
        $errors = [];

        if (!Auth::logged_in()) {

            $this->redirect("login");
        }

        $user = new User();
        $data = $user->findAll();
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $this->view("staff", ['errors' => $errors, 'rows' => $data]);

    }
}


?>