@extends('layouts.app')

@section('title', 'Editar Pet')
@section('header', 'Editar Pet')

@section('content')
  @include('partials.pet-form', [
    'action' => route('pets.update', $pet->id),
    'method' => 'PUT',
    'buttonText' => 'Atualizar',
    'pet' => $pet
  ])
@endsection
