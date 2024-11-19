@extends('layouts.app')

@section('title', 'Novo Pet')
@section('header', 'Cadastrar Novo Pet')

@section('content')
  @include('pet.partials.pet-form', [
    'action' => route('pet.store'),
    'buttonText' => 'Salvar',
  ])
@endsection
