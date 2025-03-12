<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableServiceCategoryController extends Controller
{
    public function index()
    {
        return view('tableServiceCategory'); // Carga una vista Blade
    }
}
