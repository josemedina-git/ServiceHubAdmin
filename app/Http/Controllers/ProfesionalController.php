<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesional;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

class ProfesionalController extends Controller
{
    public function create()
    {
        return view('profesionalForm');
    }

    public function store(Request $request)
    {
        try {
            // Registrar los datos recibidos
            Log::info('Recibidos datos de profesional:', $request->all());
            
            // Comprobar la conexión a la base de datos
            try {
                $testConnection = DB::connection()->getPdo();
                Log::info('Conexión a la base de datos establecida: ' . DB::connection()->getDatabaseName());
            } catch (Exception $e) {
                Log::error('Error al conectar a la base de datos: ' . $e->getMessage());
                return back()->withInput()->withErrors(['database' => 'Error de conexión a la base de datos: ' . $e->getMessage()]);
            }
            
            // Insertar directamente con DB Builder
            $result = DB::table('professionals')->insert([
                'FirstName' => $request->input('FirstName', ''),
                'LastName' => $request->input('LastName', ''),
                'CURP' => $request->input('CURP', ''),
                'RFC' => $request->input('RFC', ''),
                'Experience' => $request->input('Experience', ''),
                'Availability' => $request->input('Availability', ''),
                'Email' => $request->input('Email', ''),
                'Password' => Hash::make($request->input('Password', 'default')),
                'created_at' => now(),
                'updated_at' => now()
            ]);
            
            Log::info('Resultado de inserción: ' . ($result ? 'Éxito' : 'Fallo'));
            
            // Verificar si realmente se guardó consultando inmediatamente después
            $lastProfesional = DB::table('professionals')->latest('IdProfessional')->first();
            Log::info('Último profesional en la base de datos:', $lastProfesional ? (array)$lastProfesional : ['No encontrado']);
            
            return redirect()->route('profesionals.index')->with('success', 'Profesional agregado correctamente.');
        } catch (Exception $e) {
            Log::error('Error completo al guardar profesional: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            return back()->withInput()->withErrors(['error' => 'Error al guardar: ' . $e->getMessage()]);
        }
    }

    public function index()
    {
        try {
            // Usar DB::table para obtener los datos directamente
            $profesionals = DB::table('professionals')->get();
            Log::info('Profesionales recuperados de la base de datos: ' . count($profesionals));
            
            return view('tableProfesional', compact('profesionals'));
        } catch (Exception $e) {
            Log::error('Error al obtener profesionales: ' . $e->getMessage());
            return view('tableProfesional', ['profesionals' => []])->withErrors(['error' => 'Error al cargar profesionales: ' . $e->getMessage()]);
        }
    }

    public function edit($IdProfessional)
    {
        try {
            $profesional = DB::table('professionals')->where('IdProfessional', $IdProfessional)->first();
            if (!$profesional) {
                Log::warning('Profesional no encontrado: ' . $IdProfessional);
                return redirect()->route('profesionals.index')->withErrors(['error' => 'Profesional no encontrado']);
            }
            return view('profesionalForm', compact('profesional'));
        } catch (Exception $e) {
            Log::error('Error al editar profesional: ' . $e->getMessage());
            return redirect()->route('profesionals.index')->withErrors(['error' => 'Error al editar: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $IdProfessional)
    {
        try {
            Log::info('Actualizando profesional:', ['id' => $IdProfessional, 'datos' => $request->all()]);
            
            $updateData = [
                'FirstName' => $request->input('FirstName', ''),
                'LastName' => $request->input('LastName', ''),
                'CURP' => $request->input('CURP', ''),
                'RFC' => $request->input('RFC', ''),
                'Experience' => $request->input('Experience', ''),
                'Availability' => $request->input('Availability', ''),
                'Email' => $request->input('Email', ''),
                'updated_at' => now()
            ];
            
            if ($request->filled('Password')) {
                $updateData['Password'] = Hash::make($request->input('Password'));
            }
            
            $result = DB::table('professionals')
                ->where('IdProfessional', $IdProfessional)
                ->update($updateData);
            
            Log::info('Resultado de actualización: ' . ($result ? 'Éxito' : 'Fallo'));
            
            return redirect()->route('profesionals.index')->with('success', 'Profesional actualizado correctamente.');
        } catch (Exception $e) {
            Log::error('Error al actualizar profesional: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            return back()->withInput()->withErrors(['error' => 'Error al actualizar: ' . $e->getMessage()]);
        }
    }

    public function destroy($IdProfessional)
    {
        try {
            $result = DB::table('professionals')->where('IdProfessional', $IdProfessional)->delete();
            Log::info('Eliminación de profesional: ' . ($result ? 'Éxito' : 'Fallo'));
            
            return redirect()->route('profesionals.index')->with('success', 'Profesional eliminado correctamente.');
        } catch (Exception $e) {
            Log::error('Error al eliminar profesional: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Error al eliminar: ' . $e->getMessage()]);
        }
    }
}