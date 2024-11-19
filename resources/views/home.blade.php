@extends('layouts.app')

@section('title', 'Home')
@section('header', 'Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            Bem-vindo ao {{ config('app.name') }}!
        </div>
    </div>
</div>
@endsection
