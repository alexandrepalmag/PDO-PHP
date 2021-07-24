<?php

namespace app\models;

class User extends Model
{

    protected $table = 'users';

    public function insert(array $attributes)
    {

        dd($attributes);

        /* $sql = "insert into {$this->table}(name, email, password) value(:name, :email, :password)";

        $insert = $this->connection->prepare($sql);

        $insert->bindValue('name', $attributes['name']);
        $insert->bindValue('email', $attributes['email']);
        $insert->bindValue('password', $attributes['password']);

        return $insert->execute(); */
    }
}
