<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableLocationController extends Controller
{
    public function index()
    {
        return view('tableLocation'); // Carga una vista Blade
    }
}
