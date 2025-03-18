<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categoryForm');
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->NameCategory = $request->NameCategory;
        $category->Description = $request->Description;
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category added successfully.');

    }

    public function index()
    {
        $categories = Category::all();
        return view('tableCategory', compact('categories'));
    }

    public function edit($IdCategory)
    {
        $category = Category::findOrFail($IdCategory);
        return view('categoryForm', compact('category'));
    }

    public function update(Request $request, $IdCategory)
    {
        $category = Category::findOrFail($IdCategory);
        $category->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Categoría actualizada correctamente.');
    }

    public function destroy($IdCategory)
    {
        $category = Category::findOrFail($IdCategory);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Categoría eliminada correctamente.');
    }
}

