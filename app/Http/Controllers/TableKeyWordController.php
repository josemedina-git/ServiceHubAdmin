<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableKeyWordController extends Controller
{
    public function index()
    {
        return view('tableKeyWord'); // Carga una vista Blade
    }
}
