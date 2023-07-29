<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgreementController extends Controller
{
    public function showAgreement()
    {
        return view("agreement");
    }
}