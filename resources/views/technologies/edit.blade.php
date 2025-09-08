@extends('layouts.types')

@section('title', 'Modifica Tecnologia')

@section('content')
<form action="{{route('technologies.update', $technology->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-control mb-3 d-flex">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ $technology->name }}">
    </div>
    <div class="form-control mb-3 d-flex">
        <label for="color">Colore</label>
        <input type="color" name="color" id="color" value="{{ $technology->color }}">
    </div>
    <button type="submit">Aggiorna</button>
</form>
@endsection