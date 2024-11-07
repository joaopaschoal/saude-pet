@extends('layouts.app')

@section('title', 'Novo Pet')
@section('header', 'Cadastrar Novo Pet')

@section('content')
  @include('pets.partials.pet-form', [
    'action' => route('pets.store'),
    'buttonText' => 'Salvar',
    'especialidadeList' => $especialidadeList
  ])
@endsection
