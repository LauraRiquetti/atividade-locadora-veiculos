<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carros = Carro::orderByDesc('id')->get();

        return view('carros.index', compact('carros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'modelo' => 'required|string',
            'placa'=> 'required|string|unique:carros,placa,',
            'marca' => 'required|string',
            'ano' => 'required|integer',
            'preco_diaria' => 'required|numeric',
            'descricao' => 'nullable|string',
            'status' => 'required|enum'
        ]);
        
        Carro::create([
            'modelo' => $request->modelo,
            'placa' => $request->placa,
            'marca' => $request->marca,
            'ano' => $request->ano,
            'preco_diaria' => $request->preco_diaria,
            'descricao' => $request->descricao,
            'status' => $request->status,
        ]);

        return redirect()->route('carros.index')
            ->with('success', 'Carro cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'modelo' => ['required', 'string'],
            'placa'=> ['required', 'string', 'unique'],
            'marca' => ['required', 'string'],
            'ano' => ['required', 'date'],
            'preco_diaria' =>['required', 'decimal'],
            'descricao' => ['text'],
            'status' => ['enum'],
        ]);

        $task->update([
            'modelo' => $validated['modelo'],
            'placa' => $validated['placa'],
            'marca' => $validated['marca'],
            'ano' => $validated['ano'],
            'preco_diaria' => $validated['preco_diaria'],
            'descricao' => $validated['descricao'],
            'status' => $validated['status']
        ]); 

        return redirect()->route('carros.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $carros->delete();
        return redirect()->route('carros.index');
    }
}
