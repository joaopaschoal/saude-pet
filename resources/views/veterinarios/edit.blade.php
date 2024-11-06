@extends('layouts.app')

@section('title', 'Editar Veterinário')
@section('header', 'Editar Veterinário')

@section('content')
  @include('partials.veterinario-form', [
    'action' => route('veterinarios.update', $veterinario->id),
    'method' => 'PUT',
    'buttonText' => 'Atualizar',
    'veterinario' => $veterinario
  ])
@endsection
