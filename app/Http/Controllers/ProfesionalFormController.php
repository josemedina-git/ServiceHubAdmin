<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfesionalFormController extends Controller
{
    public function index()
    {
        return view('profesionalForm'); // Carga una vista Blade
    }
}
