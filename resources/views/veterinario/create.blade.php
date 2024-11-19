@extends('layouts.app')

@section('title', 'Novo Veterinário')
@section('header', 'Cadastrar Novo Veterinário')

@section('content')
  @include('veterinario.partials.veterinario-form', [
    'action' => route('veterinario.store'),
    'buttonText' => 'Salvar',
    'especialidadeList' => $especialidadeList,
  ])
@endsection
