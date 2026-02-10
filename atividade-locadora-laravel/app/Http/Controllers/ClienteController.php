<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Clientes::orderByDesc('id')->get();

        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'email'=> 'required|string|unique:clientes,email,',
            'senha' => 'required|string',
            'status' => 'required|enum',
        ]);
        \App\Models\Carro::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
            'status' => $request->status,
        ]);

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente cadastrado com sucesso!');
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
            'nome' => ['required', 'string'],
            'email'=> ['required', 'string', 'unique'],
            'senha' => ['required', 'string'],
            'status' => ['enum'],
        ]);

        $task->update([
            'nome' => $validated['nome'],
            'email' => $validated['email'],
            'senha' => $validated['senha'],
            'status' => $validated['status'],
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
