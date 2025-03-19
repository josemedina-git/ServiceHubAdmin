<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function create()
    {
        return view('locationForm');
    }

    public function store(Request $request)
    {
        $location = new Location();
        $location->IdClient = $request->IdClient; // Asegúrate de que este campo esté en el formulario
        $location->Address = $request->Address;
        $location->City = $request->City;
        $location->State = $request->State;
        $location->Postal_code = $request->Postal_code;
        $location->Country = $request->Country;
        $location->save();

        return redirect()->route('locations.index')->with('success', 'Keyword added successfully.');

    }

    public function index()
    {
        $locations = Location::with('client')->get();
        return view('tableLocation', compact('locations'));
    }

    public function edit($IdLocation)
    {
        $location = Location::findOrFail($IdLocation);
        return view('locationForm', compact('location'));
    }

    public function update(Request $request, $IdLocation)
    {
        $location = Location::findOrFail($IdLocation);
        $location->update($request->all());
        return redirect()->route('locations.index')->with('success', 'Ubicación actualizada correctamente.');
    }

    public function destroy($IdLocation)
    {
        $location = Keyword::findOrFail($IdLocation);
        $location->delete();

        return redirect()->route('locations.index')->with('success', 'Ubicación eliminada correctamente.');
    }
}