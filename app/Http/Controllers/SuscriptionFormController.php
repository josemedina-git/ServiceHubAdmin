<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuscriptionFormController extends Controller
{
    public function index()
    {
        return view('suscriptionForm'); // Carga una vista Blade
    }
}
