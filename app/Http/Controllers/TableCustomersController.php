<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableCustomersController extends Controller
{
    public function index()
    {
        return view('tableCustomers'); // Carga una vista Blade
    }
}
