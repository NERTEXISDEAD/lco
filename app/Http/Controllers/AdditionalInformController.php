<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdditionalInformController extends Controller
{
    public function showAdditionalInform()
    {
        return view("additional_inform");
    }
}