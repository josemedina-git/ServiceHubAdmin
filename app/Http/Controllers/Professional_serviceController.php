<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professional_service;

class Professional_serviceController extends Controller
{
    public function create()
    {
        return view('professionalServiceForm');
    }

    public function store(Request $request)
    {
        $professionalService = new Professional_service();
        $professionalService->IdProfessional = $request->IdProfessional;
        $professionalService->IdService = $request->IdService;
        $professionalService->Email = $request->Email;
        $professionalService->PhoneNumber = $request->PhoneNumber;
        $professionalService->PriceHour = $request->PriceHour;
        $professionalService->save();

        return redirect()->route('professional_services.index')->with('success', 'Professional service added successfully.');
    }

    public function index()
    {
        $professionalServices = Professional_service::all();
        return view('tableProfesionalService', compact('professionalServices'));
    }

    public function edit($IdProfessional)
    {
        $professionalService = Professional_service::findOrFail($IdProfessional);
        return view('professionalServiceForm', compact('professionalService'));
    }

    public function update(Request $request, $IdProfessional)
    {
        $professionalService = Professional_service::findOrFail($IdProfessional);
        $professionalService->update($request->all());
        return redirect()->route('professional_services.index')->with('success', 'Professional service updated successfully.');
    }

    public function destroy($IdProfessional)
    {
        $professionalService = Professional_service::findOrFail($IdProfessional);
        $professionalService->delete();

        return redirect()->route('professional_services.index')->with('success', 'Professional service deleted successfully.');
    }
}