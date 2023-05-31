<!-- Model Class -->


<?php

class Model extends Database
{

    public $errors = [];
    function __construct()
    {
        if (!property_exists($this, "table")) {
            $this->table = strtolower($this::class) . "s";
        }
    }


    // Query for the where condition
    public function where($column, $value)
    {
        $column = addslashes($column);
        $query = "SELECT * FROM $this->table WHERE $column = :value";
        return $this->query($query, ['value' => $value]);
    }


    // Query for print the data from the database
    public function findAll()
    {
        $query = "select * from $this->table";
        return $this->query($query);
    }

    // Dynamic Query for the inserting data into database

    public function insert($data)
    {
        // remove unwanted columns
        if (property_exists($this, "allowedColumns")) {
            foreach ($data as $key => $column) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }

        // run function beforeinsertion
        if (property_exists($this, 'beforeInsert')) {
            foreach ($this->beforeInsert as $func) {
                $data = $this->$func($data);
            }
        }

        $keys = array_keys($data);
        $columns = implode(",", $keys);
        $values = implode(",:", $keys);

        $query = "INSERT INTO $this->table ($columns) VALUES (:$values)";

        return $this->query($query, $data);
    }

    // Dynamic Query for to update the data from the database

    public function update($id, $data)
    {
        $str = "";

        foreach ($data as $key => $value) {
            $str .= $key . "=:" . $key . ",";
        }
        $str = trim($str, ",");
        $data['id'] = $id;

        $query = "UPDATE $this->table SET $str WHERE id = :id";


        return $this->query($query, $data);
    }

    // Dynamic Query for deleting the element from the database

    public function delete($id)
    {
        $query = "DELETE FROM $this->table WHERE id = :id";

        $data['id'] = $id;

        return $this->query($query, $data);
    }
}


?>