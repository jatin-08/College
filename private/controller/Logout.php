<?php

// Logout Controller Class


class Logout extends Controller
{
    function index()
    {
        Auth::logout();
        $this->redirect('login');
    }
}


?>