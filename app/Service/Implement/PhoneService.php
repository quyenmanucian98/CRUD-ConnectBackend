<?php


namespace App\Service\Implement;


use App\Phone;
use App\Repository\PhoneRepositoryInterface;
use App\Service\PhoneServiceInterface;

class PhoneService implements PhoneServiceInterface
{
    protected $phoneRepository;
    protected $phone;

    public function __construct(PhoneRepositoryInterface $phoneRepository,
                                Phone $phone)
    {
        $this->phoneRepository = $phoneRepository;
        $this->phone = $phone;
    }

    public function getAll()
    {
        return $this->phoneRepository->getAll();
    }

    public function create($request)
    {
        $phone = $this->phone;
        $phone->name = $request->name;
        $phone->price = $request->price;
        $phone->system = $request->system;
        $this->phoneRepository->create($phone);
    }

    public function findById($id)
    {
        return $this->phoneRepository->findById($id);
    }

    public function update($request, $id)
    {
        $phone = $this->findById($id);
        $phone->name = $request->name;
        $phone->price = $request->price;
        $phone->system = $request->system;
        $this->phoneRepository->update($phone);
    }
}
