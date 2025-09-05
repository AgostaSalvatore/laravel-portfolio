@extends('layouts.types')

@section('title', 'Tipo')

@section('content')
<div class="container">
    <h1>Dettagli del tipo</h1>
    <p><strong>Nome:</strong> {{ $type->name }}</p>
    <p><strong>Descrizione:</strong> {{ $type->description }}</p>
    <a class="btn btn-outline-warning" href="{{route('types.edit', $type)}}">Modifica</a>
    <div class="mt-4">
        <a href="{{route('types.index')}}">Torna alla lista</a>
    </div>
</div>
@endsection
