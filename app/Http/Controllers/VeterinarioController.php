<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVeterinarioRequest;
use App\Http\Requests\UpdateVeterinarioRequest;
use App\Models\Veterinario;

class VeterinarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $veterinarios = Veterinario::all();
        return view('veterinarios.index', compact('veterinarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('veterinarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVeterinarioRequest $request)
    {
        Veterinario::create($request->validated());
        return redirect()->route('veterinarios.index')->with('toast', [
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
        return view('veterinarios.show', compact('veterinario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Veterinario $veterinario)
    {
        return view('veterinarios.edit', compact('veterinario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVeterinarioRequest $request, Veterinario $veterinario)
    {
        $veterinario->update($request->validated());
        return redirect()->route('veterinarios.index')->with('toast', [
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
        return redirect()->route('veterinarios.index')->with('toast', [
            'message' => 'Veterinario excluído com sucesso.',
            'type' => 'success'
        ]);
    }
}
