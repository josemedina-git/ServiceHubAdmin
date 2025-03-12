<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientFormController extends Controller
{
    public function index()
    {
        return view('clientForm'); // Carga una vista Blade
    }
}
