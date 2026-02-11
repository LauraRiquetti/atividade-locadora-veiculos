<?php

namespace App\Http\Controllers;

use App\Models\Aluguel;
use Illuminate\Http\Request;

class AluguelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aluguels = Aluguel::orderByDesc('id')->get();

        return view('aluguels.index', compact('aluguels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('aluguels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'data_inicio' => 'required|date',
            'data_final_prevista'=> 'required|date',
            'data_final_entregue' => 'date',
            'status' => 'required|enum'
        ]);
        Aluguel::create([
            'data_inicio' => $request->data_inicio,
            'data_final_prevista' => $request->data_final_prevista,
            'data_final_entregue' => $request->data_final_entregue,
            'status' => $request->status,
        ]);

        return redirect()->route('aluguels.index')
            ->with('success', 'Aluguel cadastrado com sucesso!');
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
        return view('aluguels.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'data_inicio' => ['required', 'date'],
            'data_final_prevista'=> ['required', 'date'],
            'data_final_entregue' => ['date'],
            'status' => ['enum'],
        ]);

        $task->update([
            'data_inicio' => $validated['data_inicio'],
            'data_final_prevista'=> $validated['data_final_prevista'],
            'data_final_entregue' => $validated['data_final_entregue'],
            'status' => $validated['status']
        ]); 

        return redirect()->route('aluguels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aluguels->delete();
        return redirect()->route('aluguels.index');
    }
}
