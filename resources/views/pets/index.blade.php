@php
    use \Carbon\Carbon;
@endphp

@extends('layouts.app')

@section('title', 'Pets Cadastrados')
@section('header', 'Pets Cadastrados')

@section('content')
    <a href="{{ route('pets.create') }}" class="btn btn-apptheme mb-3">
        <span class="bi bi-plus"></span>
        Cadastrar Pet
    </a>
    <br />
    <table class="table table-hover table-striped">
        <thead>
            <tr class="table-dark">
                <th>#</th>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>Castrado</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pets as $pet)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pet->nome }}</td>
                    <td>{{ Carbon::parse($pet->nascimento)->format('d/m/Y') }}</td>
                    <td>{{ $pet->flg_castrado ? 'Sim' : 'Não' }}</td>
                    <td>
                        <a href="{{ route('pets.show', $pet->id) }}" class="btn btn-sm btn-primary">
                            <span class="bi bi-eye"></span>
                        </a>
                        <a href="{{ route('pets.edit', $pet->id) }}" class="btn btn-sm btn-warning">
                            <span class="bi bi-pencil"></span>
                        </a>
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $pet->id }}">
                            <span class="bi bi-trash"></span>
                        </button>
                        <x-confirm-delete :model="$pet" route="pets.destroy" message="Tem certeza que deseja excluir este pet?" />
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Nenhum pet cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $pets->links() }}
@endsection
