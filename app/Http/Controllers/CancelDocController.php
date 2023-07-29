<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CancelDocController extends Controller
{
    public function showCancelDoc()
    {
        return view("cancel_doc");
    }
}