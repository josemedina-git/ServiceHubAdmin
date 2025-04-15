<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesional;
use Carbon\Carbon;


class PromotionManagement extends Controller
{
    public function create()
    {
        return view('PromotionManagement');
    }

    public function store(Request $request)
    {
        $profesional = new Profesional();
        $profesional->FirstName = $request->FirstName;
        $profesional->LastName = $request->LastName;
        $profesional->CURP = $request->CURP;
        $profesional->RFC = $request->RFC;
        $profesional->Experience = $request->Experience;
        $profesional->Availability = $request->Availability;
        $profesional->Email = $request->Email;
        $profesional->Password = $request->Password;
        $profesional->save();

        return redirect()->route('profesionals.index')->with('success', 'Profesional added successfully.');

    }
 
    public function index()
    {
        $oneYearAgo = Carbon::now()->subYear();  // fecha actual - 1 año
    
        $profesionals = Profesional::where('created_at', '<=', $oneYearAgo)
                                   ->orderBy('created_at', 'asc')  // más antiguos primero
                                   ->get();
    
        return view('PromotionManagement', compact('profesionals'));
    }
    
    
    
}
