<?php


namespace App\Repository;


interface PhoneRepositoryInterface
{
    public function getAll();

    public function create($object);

    public function findById($id);

    public function update($object);
}
