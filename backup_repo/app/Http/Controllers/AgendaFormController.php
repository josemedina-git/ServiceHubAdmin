<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgendaFormController extends Controller
{
    public function index()
    {
        return view('agendaForm'); // Carga una vista Blade
    }
}
