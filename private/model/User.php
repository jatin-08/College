<!-- User Model -->

<?php

class User extends Model
{

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

        // Checking for password lenght
        if (strlen($data['password'] < 6)) {
            $this->errors['password'] = "Password should be aleast 6 character";
        }

        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }

}


?>