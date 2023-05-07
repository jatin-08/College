<!-- Database Class -->

<?php

class Database
{

    // Creating a connect() -> It will connect the database to our page 
    private function connect()
    {
        $string = DBDRIVER . ":host=" . DBHOST . ";dbname=" . DBNAME;
        if (!$con = new PDO($string, DBUSER, DBPASS)) {
            die("Could not Connect to the database");
        }
        return $con;
    }


    // Creating a run() -> It will run all the query request by the page
    public function query($query, $data = [], $data_type = "object")
    {

        $con = $this->connect();
        $stm = $con->prepare($query);
        if ($stm) {
            $check = $stm->execute($data);
            if ($check) {
                if ($data_type == "object") {
                    $data = $stm->fetchAll(PDO::FETCH_OBJ);
                } else {
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                }

                if (is_array($data) && count($data) > 0) {
                    return $data;
                }
            }
        }
        return false;
    }


}


?>