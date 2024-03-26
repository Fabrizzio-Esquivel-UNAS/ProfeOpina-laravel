<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends BaseController
{
    protected function getModelClass()
    {
        return Report::class;
    }

    protected $validationRules = [
        #'name' => 'required|string|max:255',
        // Add more validation rules as needed
    ];

    // Implement additional controller-specific methods if needed
}
