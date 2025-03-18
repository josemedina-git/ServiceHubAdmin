<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keyword;

class KeywordController extends Controller
{
    public function create()
    {
        return view('keywordForm');
    }

    public function store(Request $request)
    {
        $keyword = new Keyword();
        $keyword->Word = $request->Word;
        $keyword->IdCategory = $request->IdCategory; // Asegúrate de que este campo esté en el formulario
        $keyword->save();

        return redirect()->route('keywords.index')->with('success', 'Keyword added successfully.');

    }

    public function index()
    {
        $keywords = Keyword::with('category')->get();
        return view('tableKeyWord', compact('keywords'));
    }

    public function edit($IdKeyWord)
    {
        $keyword = Keyword::findOrFail($IdKeyWord);
        return view('keywordForm', compact('keyword'));
    }

    public function update(Request $request, $IdKeyWord)
    {
        $keyword = Keyword::findOrFail($IdKeyWord);
        $keyword->update($request->all());
        return redirect()->route('keywords.index')->with('success', 'Keyword actualizada correctamente.');
    }

    public function destroy($IdKeyWord)
    {
        $keyword = Keyword::findOrFail($IdKeyWord);
        $keyword->delete();

        return redirect()->route('keywords.index')->with('success', 'Keyword eliminada correctamente.');
    }
}