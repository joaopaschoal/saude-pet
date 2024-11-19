<?php

namespace App\Http\Controllers;

use App\Http\Requests\VeterinarioRequest;
use App\Models\Especialidade;
use App\Models\Veterinario;

class VeterinarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $veterinarioList = Veterinario::paginate(10);
        return view('veterinario.index', compact('veterinarioList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $especialidadeList = Especialidade::all();
        return view('veterinario.create', compact('especialidadeList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VeterinarioRequest $request)
    {
        Veterinario::create($request->validated());
        return redirect()->route('veterinario.index')->with('toast', [
            [
                'message' => 'Veterinario cadastrado com sucesso.',
                'type' => 'success'
            ]
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Veterinario $veterinario)
    {
        return view('veterinario.show', compact('veterinario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Veterinario $veterinario)
    {
        $especialidadeList = Especialidade::all();
        return view('veterinario.edit', compact('veterinario', 'especialidadeList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VeterinarioRequest $request, Veterinario $veterinario)
    {
        $veterinario->update($request->validated());
        return redirect()->route('veterinario.index')->with('toast', [
            'message' => 'Veterinario atualizado com sucesso.',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Veterinario $veterinario)
    {
        $veterinario->delete();
        return redirect()->route('veterinario.index')->with('toast', [
            'message' => 'Veterinario excluído com sucesso.',
            'type' => 'success'
        ]);
    }
}
