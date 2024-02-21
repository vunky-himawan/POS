<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SalesController extends Controller
{
    public function transaction(): Response
    {
        return response()->view('sales.sales');
    }
}
