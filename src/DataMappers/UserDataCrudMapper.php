<?php

namespace App\DataMappers;


class UserDataCrudMapper extends AbstractCrudMapper {
    protected string $table = 'users.json';

    public function __construct()
    {

    }

    public  function create(array $data)
    {
        $database = json_decode(file_get_contents(self::path. $this->table));
        array_push($database->users, json_encode($data));
        file_put_contents(self::path . $this->table, json_encode($database));
        return true;
    }
    // returns array
    public  function findAll(){
        $database = json_decode(file_get_contents(self::path. $this->table));
        return $database->users;
    }

    public  function find(int $id)
    {

    }

    public  function delete(int $id)
    {

    }

    public  function update(int $id, array $data)
    {

    }
}