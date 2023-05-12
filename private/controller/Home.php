<?php

// Home Controller Class


class Home extends Controller
{
    public function index()
    {
        $user = new User();


        $arr['firstname'] = 'Santosh';
        $arr['lastname'] = 'Kumar';
        // $arr['date'] = '2023-05-07 02:25:25';
        // $arr['user_id'] = 'flkasdjf';
        // $arr['gender'] = 'male';
        // $arr['school_id'] = 'dfkahsfd';
        // $arr['rank'] = 'student';

        // $user->insert($arr);

        // $user->update(2,$arr);

        $user->delete(2);

        $data = $user->findAll();
        // $data = ($db->query("select * from users"));
        $this->view("home", ["rows" => $data]);
    }
}


?>