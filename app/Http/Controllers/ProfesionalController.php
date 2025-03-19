<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesional;

class ProfesionalController extends Controller
{
    public function create()
    {
        return view('profesionalForm');
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
        $profesionals = Profesional::all();
        return view('tableProfesional', compact('profesionals'));
    }

    public function edit($IdProfessional)
    {
        $profesional = Profesional::findOrFail($IdProfessional);
        return view('profesionalForm', compact('profesional'));
    }

    public function update(Request $request, $IdProfessional)
    {
        $profesional = Profesional::findOrFail($IdProfessional);
        $profesional->update($request->all());
        return redirect()->route('profesionals.index')->with('success', 'Profesional actualizado correctamente.');
    }

    public function destroy($IdProfessional)
    {
        $profesional = Profesional::findOrFail($IdProfessional);
        $profesional->delete();

        return redirect()->route('profesionals.index')->with('success', 'Profesional eliminado correctamente.');
    }
}