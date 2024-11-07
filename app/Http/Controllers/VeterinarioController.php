<?php

namespace App\Http\Controllers;

use App\Http\Requests\VeterinarioRequest;
use App\Models\Veterinario;

class VeterinarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $veterinarios = Veterinario::paginate(10);
        return view('veterinarios.index', compact('veterinarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // TODO: converter em entidade e puxar do BD:
        $especialidadeList = [
            'Pequenos animais',
            'Grandes animais',
            'Animais exóticos',
        ];
        return view('veterinarios.create', compact('especialidadeList'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VeterinarioRequest $request)
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
        // TODO: converter em entidade e puxar do BD:
        $especialidadeList = [
            'Pequenos animais',
            'Grandes animais',
            'Animais exóticos',
        ];
        return view('veterinarios.edit', compact('veterinario', 'especialidadeList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VeterinarioRequest $request, Veterinario $veterinario)
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
