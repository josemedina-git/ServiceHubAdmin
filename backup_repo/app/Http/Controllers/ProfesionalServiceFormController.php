<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfesionalServiceFormController extends Controller
{
    public function index()
    {
        return view('profesionalServiceForm'); // Carga una vista Blade
    }
}
