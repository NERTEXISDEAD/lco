<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CancelApplicationController extends Controller
{
    public function showCancelApplication()
    {
        return view("cancel_application");
    }
}