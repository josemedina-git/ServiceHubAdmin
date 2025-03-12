<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableProfesionalServiceController extends Controller
{
    public function index()
    {
        return view('tableProfesionalService'); // Carga una vista Blade
    }
}
