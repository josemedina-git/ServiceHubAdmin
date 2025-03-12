<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormServiceCategoryController extends Controller
{
    public function index()
    {
        return view('formServiceCategory'); // Carga una vista Blade
    }
}
