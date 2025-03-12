<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TablaTypeSusciptionController extends Controller
{
    public function index()
    {
        return view('tablaTypeSusciption'); // Carga una vista Blade
    }
}
