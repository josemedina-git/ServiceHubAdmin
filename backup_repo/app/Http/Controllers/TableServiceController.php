<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableServiceController extends Controller
{
    public function index()
    {
        return view('tableService'); // Carga una vista Blade
    }
}
