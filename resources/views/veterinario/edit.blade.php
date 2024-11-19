@extends('layouts.app')

@section('title', 'Editar Veterinário')
@section('header', 'Editar Veterinário')

@section('content')
  @include('veterinario.partials.veterinario-form', [
    'action' => route('veterinario.update', $veterinario->id),
    'method' => 'PUT',
    'buttonText' => 'Atualizar',
    'veterinario' => $veterinario
  ])
@endsection
