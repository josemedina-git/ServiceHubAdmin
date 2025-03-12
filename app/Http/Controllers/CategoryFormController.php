<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryFormController extends Controller
{
    public function index()
    {
        return view('categoryForm'); // Carga una vista Blade
    }
}
