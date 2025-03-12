<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypePaymentFormController extends Controller
{
    public function index()
    {
        return view('typePayment'); // Carga una vista Blade
    }
}
