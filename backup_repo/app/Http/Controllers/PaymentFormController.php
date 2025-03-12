<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentFormController extends Controller
{
    public function index()
    {
        return view('paymentForm'); // Carga una vista Blade
    }
}
