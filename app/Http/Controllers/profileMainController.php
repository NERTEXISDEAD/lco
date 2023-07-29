<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileMainController extends Controller
{
    public function showProfileMainForm()
    {
        return view("profileMain");
    }
}
