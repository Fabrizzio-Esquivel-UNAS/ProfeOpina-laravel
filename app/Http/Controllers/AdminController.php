<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends BaseController
{
    protected function getModelClass()
    {
        return Admin::class;
    }

    protected $validationRules = [
        #'name' => 'required|string|max:255',
        // Add more validation rules as needed
    ];

    // Implement additional controller-specific methods if needed
}
