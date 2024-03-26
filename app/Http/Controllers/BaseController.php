<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

abstract class BaseController extends Controller
{
    protected $modelClass;
    protected $validationRules = [];

    // Constructor to set the model class
    public function __construct()
    {
        // Set the model class in the constructor
        $this->modelClass = $this->getModelClass();
    }

    // Retrieve all resources
    public function index()
    {
        // Use the index method with the model class
        return $this->modelClass::all();
    }

    // Create a new resource
    public function store(Request $request)
    {
        return $this->tryCatch(function () use ($request) {
            $validationResult = $this->validateRequest($request);
            if ($validationResult['success']) {
                $modelInstance = $this->modelClass::create($request->all());
                return response()->json($validationResult, 201);
            } else {
                return response()->json($validationResult, 422);
            }
        });
    }

    // Update an existing resource
    public function update(Request $request, $id)
    {
        return $this->tryCatch(function () use ($request, $id) {
            $validationResult = $this->validateRequest($request);
            if ($validationResult['success']) {
                $modelInstance = $this->findModel($id);
                $modelInstance->update($request->all());
                return response()->json($validationResult, 201);
            } else {
                return response()->json($validationResult, 422);
            }
        });
    }

    // Show a specific resource
    public function show($id)
    {
        return $this->tryCatch(function () use ($id) {
            $modelInstance = $this->findModel($id);
            return response()->json($modelInstance);
        });
    }

    // Delete a specific resource
    public function destroy($id)
    {
        return $this->tryCatch(function () use ($id) {
            $modelInstance = $this->findModel($id);
            $modelInstance->delete();
            return response()->json(['message' => 'Model deleted successfully.']);
        });
    }

    // Helper method to encapsulate try-catch block
    protected function tryCatch($callback)
    {
        try {
            return $callback();
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
    }

    // Abstract method to be implemented by child controllers to retrieve the model class name
    protected abstract function getModelClass();

    // Helper method to find a model by ID
    private function findModel($id)
    {
        $modelInstance = $this->modelClass::find($id);
        if (!$modelInstance) {
            return response()->json(['message' => 'Model not found.'], 404);
        }
        return $modelInstance;
    }

    // Validation method
    protected function validateRequest(Request $request)
    {
        $validator = Validator::make($request->all(), $this->validationRules);

        if ($validator->fails()) {
            return [
                'success' => false,
                'message' => $validator->errors()->first()
            ];
        }

        return [
            'success' => true,
            'message' => 'Data is valid.'
        ];
    }
}
