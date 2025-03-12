<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeSuscriptionFormController extends Controller
{
    public function index()
    {
        return view('typeSuscriptionForm'); // Carga una vista Blade
    }
}
