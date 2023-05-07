<!-- Model Class -->


<?php

class Model extends Database
{

    protected $table = "users";

    public function where($column, $value)
    {
        $query = "select * from $this->table where $column = :value";
        return $this->query($query, [
            'value' => $value
        ]);
    }

    public function findAll()
    {
        $query = "select * from $this->table";
        return $this->query($query);
    }
}


?>