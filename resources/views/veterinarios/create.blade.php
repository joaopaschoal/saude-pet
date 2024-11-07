@extends('layouts.app')

@section('title', 'Novo Veterinário')
@section('header', 'Cadastrar Novo Veterinário')

@section('content')
  @include('veterinarios.partials.veterinario-form', [
    'action' => route('veterinarios.store'),
    'buttonText' => 'Salvar',
  ])
@endsection