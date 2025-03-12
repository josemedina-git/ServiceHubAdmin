<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdenesController extends Controller
{
    public function index()
    {
        return view('ordenes'); // Carga una vista Blade
    }
}
