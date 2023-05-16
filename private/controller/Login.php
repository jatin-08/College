<?php

// Login Controller Class


class Login extends Controller
{
    public function index()
    {
        $errors = [];

        if (count($_POST) > 0) {

            $user = new User();

            if ($row = $user->where('email', $_POST['email'])) {
                $row = $row[0];

                if (password_verify($_POST['password'], $row->password)) {

                    Auth::authenticate($row);
                    $this->redirect('home');
                }
            }
            $errors['email'] = "Wrong Email or Password";
        }
        $this->view("login", ['errors' => $errors]);
    }
}


?>