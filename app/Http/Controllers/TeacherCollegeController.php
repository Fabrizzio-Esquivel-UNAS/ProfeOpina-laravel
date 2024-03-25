<?php

namespace App\Http\Controllers;

use App\Models\TeacherCollege;
use Illuminate\Http\Request;

class TeacherCollegeController extends Controller
{
    //
    public function index()
    {
        $items = TeacherCollege::all();
        return $items;
    }
}
