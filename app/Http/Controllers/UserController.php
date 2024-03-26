<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    protected function getModelClass()
    {
        return User::class;
    }

    protected $validationRules = [
        #'name' => 'required|string|max:255',
        // Add more validation rules as needed
    ];

    // Implement additional controller-specific methods if needed
}
