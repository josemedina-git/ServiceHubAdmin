<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    public function create()
    {
        return view('serviceForm');
    }

    public function store(Request $request)
    {
        $service = new Services();
        $service->NameService = $request->NameService;
        $service->Description = $request->Description;
        $service->save();

        return redirect()->route('services.index')->with('success', 'Service added successfully.');
    }

    public function index()
    {
        $services = Services::all();
        return view('tableService', compact('services'));
    }

    public function edit($IdService)
    {
        $service = Services::findOrFail($IdService);
        return view('serviceForm', compact('service'));
    }

    public function update(Request $request, $IdService)
    {
        $service = Services::findOrFail($IdService);
        $service->update($request->all());
        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy($IdService)
    {
        $service = Services::findOrFail($IdService);
        $service->delete();

        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}