@extends('layouts.types')

@section('title', 'Modifica Tipo')

@section('content')
<form action="{{route('types.update', $type->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-control mb-3 d-flex">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ $type->name }}">
    </div>
    <div class="form-control mb-3 d-flex">
        <label for="description">Descrizione</label>
        <textarea name="description" id="description">{{ $type->description }}</textarea>
    </div>
    <button type="submit">Aggiorna</button>
</form>
@endsection