<?php


namespace App\Repository\Eloquent;


use App\Phone;
use App\Repository\PhoneRepositoryInterface;

class PhoneRepository implements PhoneRepositoryInterface
{
    protected $phone;

    public function __construct(Phone $phone)
    {
        $this->phone = $phone;
    }

    public function getAll()
    {
        return $this->phone->all();
    }

    public function create($object)
    {
        $object->save();
    }

    public function findById($id)
    {
        return $this->phone->findOrFail($id);
    }

    public function update($object)
    {
        $object->save();
    }
}
