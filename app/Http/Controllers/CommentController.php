<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends BaseController
{
    protected function getModelClass()
    {
        return Comment::class;
    }

    protected $validationRules = [
        #'name' => 'required|string|max:255',
        // Add more validation rules as needed
    ];

    // Implement additional controller-specific methods if needed
}
