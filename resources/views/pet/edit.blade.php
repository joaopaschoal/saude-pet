@extends('layouts.app')

@section('title', 'Editar Pet')
@section('header', 'Editar Pet')

@section('content')
  @include('pet.partials.pet-form', [
    'action' => route('pet.update', $pet->id),
    'method' => 'PUT',
    'buttonText' => 'Atualizar',
    'pet' => $pet
  ])
@endsection
