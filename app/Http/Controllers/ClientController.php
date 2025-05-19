<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class ClientController extends Controller
{
    public function create()
    {
        return view('clientForm');
    }

    public function store(Request $request)
    {
        try {
            // Registrar los datos recibidos
            Log::info('Recibidos datos de cliente:', $request->all());
            
            // Comprobar la conexión a la base de datos
            try {
                $testConnection = DB::connection()->getPdo();
                Log::info('Conexión a la base de datos establecida: ' . DB::connection()->getDatabaseName());
            } catch (Exception $e) {
                Log::error('Error al conectar a la base de datos: ' . $e->getMessage());
                return back()->withInput()->withErrors(['database' => 'Error de conexión a la base de datos: ' . $e->getMessage()]);
            }
            
            // Insertar directamente con DB Builder y sin try/catch interno para ver el error exacto
            $result = DB::table('clients')->insert([
                'FirstName' => $request->input('FirstName', ''),
                'LastName' => $request->input('LastName', ''),
                'Email' => $request->input('Email', ''),
                'PhoneNumber' => $request->input('PhoneNumber', ''),
                'Password' => Hash::make($request->input('Password', 'default')),
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            Log::info('Resultado de inserción: ' . ($result ? 'Éxito' : 'Fallo'));
            
            // Verificar si realmente se guardó consultando inmediatamente después
            $lastClient = DB::table('clients')->latest('IdClient')->first();
            Log::info('Último cliente en la base de datos:', $lastClient ? (array)$lastClient : ['No encontrado']);
            
            return redirect()->route('clients.index')->with('success', 'Cliente agregado correctamente.');
        } catch (Exception $e) {
            Log::error('Error completo al guardar cliente: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            return back()->withInput()->withErrors(['error' => 'Error al guardar: ' . $e->getMessage()]);
        }
    }

    public function index()
    {
        try {
            // Usar DB::table para obtener los datos directamente
            $clients = DB::table('clients')->get();
            Log::info('Clientes recuperados de la base de datos: ' . count($clients));
            
            return view('tableCustomers', compact('clients'));
        } catch (Exception $e) {
            Log::error('Error al obtener clientes: ' . $e->getMessage());
            return view('tableCustomers', ['clients' => []])->withErrors(['error' => 'Error al cargar clientes: ' . $e->getMessage()]);
        }
    }

    public function edit($IdClient)
    {
        try {
            $client = DB::table('clients')->where('IdClient', $IdClient)->first();
            if (!$client) {
                Log::warning('Cliente no encontrado: ' . $IdClient);
                return redirect()->route('clients.index')->withErrors(['error' => 'Cliente no encontrado']);
            }
            return view('clientForm', compact('client'));
        } catch (Exception $e) {
            Log::error('Error al editar cliente: ' . $e->getMessage());
            return redirect()->route('clients.index')->withErrors(['error' => 'Error al editar: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $IdClient)
    {
        try {
            Log::info('Actualizando cliente:', ['id' => $IdClient, 'datos' => $request->all()]);
            
            $updateData = [
                'FirstName' => $request->input('FirstName', ''),
                'LastName' => $request->input('LastName', ''),
                'Email' => $request->input('Email', ''),
                'PhoneNumber' => $request->input('PhoneNumber', ''),
                'updated_at' => now()
            ];
            
            if ($request->filled('Password')) {
                $updateData['Password'] = Hash::make($request->input('Password'));
            }
            
            $result = DB::table('clients')
                ->where('IdClient', $IdClient)
                ->update($updateData);
            
            Log::info('Resultado de actualización: ' . ($result ? 'Éxito' : 'Fallo'));
            
            return redirect()->route('clients.index')->with('success', 'Cliente actualizado correctamente.');
        } catch (Exception $e) {
            Log::error('Error al actualizar cliente: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            return back()->withInput()->withErrors(['error' => 'Error al actualizar: ' . $e->getMessage()]);
        }
    }

    public function destroy($IdClient)
    {
        try {
            $result = DB::table('clients')->where('IdClient', $IdClient)->delete();
            Log::info('Eliminación de cliente: ' . ($result ? 'Éxito' : 'Fallo'));
            
            return redirect()->route('clients.index')->with('success', 'Cliente eliminado correctamente.');
        } catch (Exception $e) {
            Log::error('Error al eliminar cliente: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Error al eliminar: ' . $e->getMessage()]);
        }
    }
}