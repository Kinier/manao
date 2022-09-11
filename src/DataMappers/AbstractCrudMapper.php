<?php

namespace App\DataMappers;

abstract class AbstractCrudMapper
{
    protected const path = __DIR__ . '/../Database/';

    abstract public function create(array $data);

    abstract public function find(int $id);

    abstract public function delete(int $id);

    abstract public function update(int $id, array $data);
}