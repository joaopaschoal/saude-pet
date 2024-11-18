@php
    use \Carbon\Carbon;
@endphp

@extends('layouts.app')

@section('title', 'Veterinários Cadastrados')
@section('header', 'Veterinários Cadastrados')

@section('content')
    <a href="{{ route('veterinarios.create') }}" class="btn btn-apptheme mb-3">
        <span class="bi bi-plus"></span>
        Cadastrar Veterinário
    </a>
    <br />
    <table class="table table-hover table-striped">
        <thead>
            <tr class="table-dark">
                <th>#</th>
                <th>CRMV</th>
                <th>Nome</th>
                <th>Nascimento</th>
                <th>Especialidade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($veterinarios as $veterinario)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $veterinario->crmv }}</td>
                    <td>{{ $veterinario->nome }}</td>
                    <td>{{ $veterinario->nascimento ? Carbon::parse($veterinario->nascimento)->format('d/m/Y') : '-' }}</td>
                    <td>{{ $veterinario->especialidade->nome }}</td>
                    <td>
                        <a href="{{ route('veterinarios.show', $veterinario->id) }}" class="btn btn-sm btn-primary">
                            <span class="bi bi-eye"></span>
                        </a>
                        <a href="{{ route('veterinarios.edit', $veterinario->id) }}" class="btn btn-sm btn-warning">
                            <span class="bi bi-pencil"></span>
                        </a>
                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $veterinario->id }}">
                            <span class="bi bi-trash"></span>
                        </button>
                        <x-confirm-delete :model="$veterinario" route="veterinarios.destroy" message="Tem certeza que deseja excluir este veterinario?" />
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Nenhum veterinário cadastrado.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $veterinarios->links() }}
@endsection
