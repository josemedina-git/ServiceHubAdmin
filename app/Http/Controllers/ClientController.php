<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function create()
    {
        return view('clientForm');
    }

    public function store(Request $request)
    {
        $client = new Client();
        $client->FirstName = $request->FirstName;
        $client->LastName = $request->LastName;
        $client->Email = $request->Email;
        $client->PhoneNumber = $request->PhoneNumber;
        $client->Password = $request->Password; 
        $client->save();

        return redirect()->route('clients.index')->with('success', 'Customer added successfully.');

    }

    public function index()
    {
        $clients = Client::all();
        return view('tableCustomers', compact('clients'));
    }

    public function edit($IdClient)
    {
        $client = Client::findOrFail($IdClient);
        return view('clientForm', compact('client'));
    }

    public function update(Request $request, $IdClient)
    {
        $client = Client::findOrFail($IdClient);
        $client->update($request->all());
        return redirect()->route('clients.index')->with('success', 'Cliente actualizado correctamente.');
    }

    public function destroy($IdClient)
    {
        $client = Client::findOrFail($IdClient);
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Cliente eliminado correctamente.');
    }
}
