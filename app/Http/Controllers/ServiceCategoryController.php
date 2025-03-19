<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicecategory;
use App\Models\Services;
use App\Models\Category;

class ServiceCategoryController extends Controller
{
    public function create()
    {
        $services = Services::all();
        $categories = Category::all();
        return view('formServiceCategory', compact('services', 'categories'));
    }

    public function store(Request $request)
    {
        $serviceCategory = new Servicecategory();
        $serviceCategory->IdService = $request->IdService;
        $serviceCategory->IdCategory = $request->IdCategory;
        $serviceCategory->save();

        return redirect()->route('service_categories.index')->with('success', 'Service Category added successfully.');
    }

    public function index()
{
    $services = Services::all(); 
    $categories = Category::all();

    return view('formServiceCategory', compact('services', 'categories'));
}

    public function edit($IdService, $IdCategory)
    {
        $serviceCategory = Servicecategory::where('IdService', $IdService)->where('IdCategory', $IdCategory)->firstOrFail();
        $services = Services::all();
        $categories = Category::all();
        return view('formServiceCategory', compact('serviceCategory', 'services', 'categories'));
    }

    public function update(Request $request, $IdService, $IdCategory)
    {
        $serviceCategory = Servicecategory::where('IdService', $IdService)->where('IdCategory', $IdCategory)->firstOrFail();
        $serviceCategory->update($request->all());
        return redirect()->route('service_categories.index')->with('success', 'Service Category updated successfully.');
    }

    public function destroy($IdService, $IdCategory)
    {
        $serviceCategory = Servicecategory::where('IdService', $IdService)->where('IdCategory', $IdCategory)->firstOrFail();
        $serviceCategory->delete();

        return redirect()->route('service_categories.index')->with('success', 'Service Category deleted successfully.');
    }
}
