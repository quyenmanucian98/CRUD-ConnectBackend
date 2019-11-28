<?php


namespace App\Service;


interface PhoneServiceInterface
{
public function getAll();
public function create($request);
public function findById($id);
public function update($request ,$id);
}
