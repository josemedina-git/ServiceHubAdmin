<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableTypePaymentController extends Controller
{
    public function index()
    {
        return view('tableTypePayment'); // Carga una vista Blade
    }
}
