<?php

namespace app\models;

class User extends Model
{

    protected $table = 'users';

     /*public function insert(array $attributes)
    {

        $sql = "insert into {$this->table}(name, email, password) value(:name, :email, :password)";

        $insert = $this->connection->prepare($sql);

        foreach ($$attributes as $key => $value) {

            $insert->bindValue($key, $value);
        }

        return $insert->execute(); 
    }*/
}
