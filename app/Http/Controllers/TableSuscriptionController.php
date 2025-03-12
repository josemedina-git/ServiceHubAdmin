<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableSuscriptionController extends Controller
{
    public function index()
    {
        return view('tableSuscription'); // Carga una vista Blade
    }
}
