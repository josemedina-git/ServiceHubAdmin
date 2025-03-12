<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceFormController extends Controller
{
    public function index()
    {
        return view('serviceForm'); // Carga una vista Blade
    }
}
