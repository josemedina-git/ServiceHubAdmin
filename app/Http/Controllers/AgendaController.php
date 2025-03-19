<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index()
    {
        $agendas = Agenda::with(['client', 'services'])->get();
        return view('tableAgenda', compact('agendas'));
    }

    public function create()
    {
        return view('agendaForm');
    }

    public function store(Request $request)
    {
        $request->validate([
            'IdClient' => 'required|integer',
            'IdService' => 'required|integer',
            'DateAgenda' => 'required|date',
            'AgendaStatus' => 'required|in:pending,confirmed,cancelled',
        ]);

        Agenda::create($request->all());

        return redirect()->route('agendas.index')->with('success', 'Agenda creada correctamente.');
    }

    public function edit($id)
    {
        $agenda = Agenda::findOrFail($id);
        return view('agendaForm', compact('agenda'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'IdClient' => 'required|integer',
            'IdService' => 'required|integer',
            'DateAgenda' => 'required|date',
            'AgendaStatus' => 'required|in:pending,confirmed,cancelled',
        ]);

        $agenda = Agenda::findOrFail($id);
        $agenda->update($request->all());

        return redirect()->route('agendas.index')->with('success', 'Agenda actualizada correctamente.');
    }

    public function destroy($id)
    {
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();

        return redirect()->route('agendas.index')->with('success', 'Agenda eliminada correctamente.');
    }
}