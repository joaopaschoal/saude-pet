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
        // $pets = Pet::all();
        $pets = Pet::paginate(10);
        return view('pets.index', compact('pets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PetRequest $request)
    {
        Pet::create($request->validated());
        return redirect()->route('pets.index')->with('success', 'Pet cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pet $pet)
    {
        return view('pets.show', compact('pet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pet $pet)
    {
        return view('pets.edit', compact('pet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PetRequest $request, Pet $pet)
    {
        $pet->update($request->validated());
        return redirect()->route('pets.index')->with('success', 'Pet atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect()->route('pets.index')->with('success', 'Pet excluído com sucesso!');
    }
}
