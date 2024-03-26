<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends BaseController
{
    protected function getModelClass()
    {
        return Subscription::class;
    }

    protected $validationRules = [
        #'name' => 'required|string|max:255',
        // Add more validation rules as needed
    ];

    // Implement additional controller-specific methods if needed
}
