@extends('layouts.types')

@section('title', 'Tipo')

@section('content')
<div class="container">
    <h1>Dettagli del tipo</h1>
    <p>{{ $type->name }}</p>
    <p>{{ $type->description }}</p>
    <a href="{{route('types.index')}}">Torna alla lista</a>
</div>
@endsection
