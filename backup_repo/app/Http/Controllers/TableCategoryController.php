<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableCategoryController extends Controller
{
    public function index()
    {
        return view('tableCategory'); // Carga una vista Blade
    }
}
