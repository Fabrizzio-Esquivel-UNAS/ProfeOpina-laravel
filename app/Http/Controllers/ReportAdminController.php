<?php

namespace App\Http\Controllers;

use App\Models\ReportAdmin;
use Illuminate\Http\Request;

class ReportAdminController extends Controller
{
    //
    public function index()
    {
        $items = ReportAdmin::all();
        return $items;
    }
}
