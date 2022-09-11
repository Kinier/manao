<?php

namespace App\DataMappers;


class UserDataCrudMapper extends AbstractCrudMapper {
    protected string $table = 'users.json';

    public function __construct()
    {

    }

    public  function create(array $data)
    {
        $database = json_decode(file_get_contents(self::path. $this->table), true);
        $data['id'] = count($database['users']);
        array_push($database['users'], ($data));
        file_put_contents(self::path . $this->table, json_encode($database));
        return true;
    }
    // returns array
    public  function findAll(){
        $database = json_decode(file_get_contents(self::path. $this->table), true);
        return $database['users'];
    }

    public  function find(int $id)
    {

    }

    public  function delete(int $id)
    {
        $database = json_decode(file_get_contents(self::path. $this->table), true);
        $users = $database['users'];
        foreach ($users as $key => $user){
            if ($user['id'] === $id){
                unset($users[$key]);
                $database['users'] = $users;
                file_put_contents(self::path . $this->table, json_encode($database));
                return true;
            }
        }

        return false;
    }

    public  function update(int $id, array $data)
    {
        $database = json_decode(file_get_contents(self::path. $this->table), true);
        $users = $database['users'];
        foreach ($users as $key => $user){
            if ($user['id'] === $id){
                foreach($data as $dataKey => $dataValue){
                    if (isset($user[$dataKey])){
                        $users[$key][$dataKey] = $dataValue;
                    }
                }
                $database['users'] = $users;
                file_put_contents(self::path . $this->table, json_encode($database));
                return true;
            }
        }

        return false;
    }
}