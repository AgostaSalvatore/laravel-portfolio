@extends('layouts.types')

@section('title', 'Crea Tecnologia')

@section('content')
<form action="{{route('technologies.store')}}" method="POST">
    @csrf
    <div class="form-control mb-3 d-flex">
        <label for="name">Nome</label>
        <input type="text" name="name" id="name">
    </div>
    <div class="form-control mb-3 d-flex">
        <label for="color">Colore</label>
        <input type="color" name="color" id="color">
    </div>
    <button type="submit">Crea</button>
</form>
@endsection
