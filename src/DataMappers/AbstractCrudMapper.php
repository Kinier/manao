<?php

namespace App\DataMappers;

abstract class AbstractCrudMapper{
    protected string $path = __DIR__ . '/../Database/';

    abstract public static function create(array $data);

    abstract public static function find(int $id);

    abstract public static function delete(int $id);

    abstract public static function update(int $id, array $data);
}