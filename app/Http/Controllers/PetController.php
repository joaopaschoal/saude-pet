<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Http\Requests\PetRequest;

class PetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petList = Pet::paginate(10);
        return view('pet.index', compact('petList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pet.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PetRequest $request)
    {
        Pet::create($request->validated());
        return redirect()->route('pet.index')->with('toast', [
            [
                'message' => 'Pet cadastrado com sucesso.',
                'type' => 'success'
            ]
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        return view('pet.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        return view('pet.edit', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PetRequest $request, Pet $pet)
    {
        $pet->update($request->validated());
        return redirect()->route('pet.index')->with('toast', [
            'message' => 'Pet atualizado com sucesso.',
            'type' => 'success'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('pet.index')->with('toast', [
            'message' => 'Pet excluído com sucesso.',
            'type' => 'success'
        ]);
    }
}
