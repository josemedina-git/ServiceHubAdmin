<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableProfesionalController extends Controller
{
    public function index()
    {
        return view('tableProfesional'); // Carga una vista Blade
    }
}
