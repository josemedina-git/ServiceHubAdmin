<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableReviewController extends Controller
{
    public function index()
    {
        return view('tableReview'); // Carga una vista Blade
    }
}
