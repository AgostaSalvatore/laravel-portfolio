@extends('layouts.types')

@section('title', 'Crea Tipo')

@section('content')
<form action="{{route('types.store')}}" method="POST">
    @csrf
    <div class="form-control mb-3 d-flex">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="form-control mb-3 d-flex">
        <label for="description">Descrizione</label>
        <textarea name="description" id="description"></textarea>
    </div>
    <button type="submit">Crea</button>
</form>
@endsection
