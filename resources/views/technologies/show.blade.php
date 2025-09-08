@extends('layouts.types')

@section('title', 'Tipo')

@section('content')
<div class="container">
    <h1>Dettagli della tecnologia</h1>
    <p><strong>Nome:</strong> {{ $technology->name }}</p>
    <p><strong>Colore Assegnato:</strong> 
        <span class="d-inline-flex align-items-center gap-2">
            <span class="color-preview" style="display: inline-block; width: 20px; height: 20px; background-color: {{ $technology->color }}; border: 1px solid #ccc; border-radius: 3px;"></span>
            {{ $technology->color }}
        </span>
    </p>
    <a class="btn btn-outline-warning" href="{{route('technologies.edit', $technology)}}">Modifica</a>
    <div class="mt-4">
        <a href="{{route('technologies.index')}}">Torna alla lista</a>
    </div>
</div>
@endsection