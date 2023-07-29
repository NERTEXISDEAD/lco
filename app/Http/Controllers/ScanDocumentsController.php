<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScanDocumentsController extends Controller
{
    public function showScanDocuments()
    {
        return view("scans_documents");
    }
}