<?php

// Home Controller Class


class Home extends Controller
{
    public function index()
    {
        $user = $this->load_model("User");
        $data = $user->findAll();
        // $data = ($db->query("select * from users"));
        $this->view("home", ["rows" => $data]);
    }
}


?>