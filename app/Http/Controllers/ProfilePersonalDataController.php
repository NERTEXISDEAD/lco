<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilePersonalDataController extends Controller
{
    public function showProfilePersonalData()
    {
        return view("profilePersonalData");
    }
}