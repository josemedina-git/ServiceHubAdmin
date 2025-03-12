<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableAgendaController extends Controller
{
    public function index()
    {
        return view('tableAgenda'); // Carga una vista Blade
    }
}
