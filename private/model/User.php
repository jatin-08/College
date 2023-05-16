<!-- User Model -->

<?php

class User extends Model
{

    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'password',
        'gender',
        'rank',
        'date'
    ];

    protected $beforeInsert = [
        'make_user_id',
        'make_school_id',
        'password_hash'
    ];

    public function validate($data)
    {

        $this->errors = [];

        // Checking for firstname
        if (empty($data['firstname']) || !preg_match('/^[a-zA-Z]+$/', $data['firstname'])) {
            $this->errors['firstname'] = "First name Requried and Only letter are allowed";
        }
        // Checking for Lastname
        if (empty($data['lastname']) || !preg_match('/^[a-zA-Z]+$/', $data['lastname'])) {
            $this->errors['lastname'] = "Last name Requried and Only letter are allowed";
        }
        // Checking for email
        if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is in valid";
        }
        // Checking for gender
        $gender = ['male', 'female'];
        if (empty($data['gender']) || !in_array($data['gender'], $gender)) {
            $this->errors['gender'] = "Gender is required";
        }
        // Checking for rank
        $rank = ['student', 'reception', 'lecturer', 'admin', 'super_admin'];
        if (empty($data['rank']) || !in_array($data['rank'], $rank)) {
            $this->errors['rank'] = "Rank is Required";
        }
        // Checking for password
        if (empty($data['password']) || $data['password'] != $data['confirmpassword']) {
            $this->errors['password'] = "Password is required Otherwise password not matched";
        }

        // Checking for password length
        if (strlen($data['password'] < 6)) {
            $this->errors['password'] = "Password should be aleast 6 character";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }

    public function make_user_id($data)
    {

        $data['user_id'] = $this->random_string(60);
        return $data;
    }

    public function make_school_id($data)
    {
        if (isset($_SESSION['USER']->school_id)) {
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }
    public function password_hash($data)
    {
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        return $data;
    }

    private function random_string($length)
    {
        $array = [
            '0',
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            'a',
            'b',
            'c',
            'd',
            'e',
            'f',
            'g',
            'h',
            'i',
            'j',
            'k',
            'l',
            'm',
            'n',
            'o',
            'p',
            'q',
            'r',
            's',
            't',
            'u',
            'v',
            'w',
            'x',
            'y',
            'z',
            'A',
            'B',
            'C',
            'D',
            'E',
            'F',
            'G',
            'H',
            'I',
            'J',
            'K',
            'L',
            'M',
            'N',
            'O',
            'P',
            'Q',
            'R',
            'S',
            'T',
            'U',
            'V',
            'W',
            'X',
            'Y',
            'Z'
        ];

        $text = "";

        for ($i = 0; $i < $length; $i++) {
            $random = rand(0, 61);
            $text .= $array[$random];
        }
        return $text;
    }


}


?>