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

    // Implement validateRequest method for the controller
    protected function validateRequest(Request $request)
    {
        return $request->validate([
            // 'content' => 'required',
            // Add validation rules for other attributes specific to this controller
        ]);
    }

    // Implement additional controller-specific methods if needed
}
