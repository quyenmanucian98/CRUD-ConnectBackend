<?php

namespace App\Http\Controllers;

use App\Service\PhoneServiceInterface;
use http\Env\Response;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    protected $phoneService;

    public function __construct(PhoneServiceInterface $phoneService)
    {
        $this->phoneService = $phoneService;
    }

    public function getAll()
    {
        try {
            $phones = $this->phoneService->getAll();
        } catch (\Exception $e) {
            return \response()->json([
                'status' => 'Error',
                'message' => $e->getMessage()
            ]);
        }
        return response()->json([
            'status' => 'Success',
            'data' => $phones,
            'message' => 'Load Complete'
        ]);
    }

    public function add(Request $request)
    {
        try {
            $this->phoneService->create($request);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'Error',
                'message' => $e->getMessage()
            ]);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Add Complete'
        ]);
    }

    public function findById($id)
    {
        try {
            $phone = $this->phoneService->findById($id);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'Error',
                'message' => $e->getMessage()
            ]);
        }
        return response()->json([
            'status' => 'success',
            'data' => $phone
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $this->phoneService->update($request, $id);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'Error',
                'message' => $e->getMessage()
            ]);
        }
        return response()->json([
            'status' => 'success',
            'message' => 'Update Complete'
        ]);
    }
}
