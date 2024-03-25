<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController extends Controller
{
    protected $modelClass;

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
            $validatedData = $this->validateRequest($request);
            $modelInstance = $this->modelClass::create($validatedData);
            return response()->json($modelInstance, 201);
        });
    }

    // Update an existing resource
    public function update(Request $request, $id)
    {
        return $this->tryCatch(function () use ($request, $id) {
            $modelInstance = $this->findModel($id);
            $validatedData = $this->validateRequest($request);
            $modelInstance->update($validatedData);
            return response()->json(['message' => 'Model updated successfully.']);
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

    // Abstract method to be implemented by child controllers for validation
    protected abstract function validateRequest(Request $request);

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
}
