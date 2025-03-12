<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationFormController extends Controller
{
    public function index()
    {
        return view('locationForm'); // Carga una vista Blade
    }
}
