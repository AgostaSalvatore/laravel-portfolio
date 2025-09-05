@extends('layouts.types')

@section('title', 'Tipi')

@section('content')
<div class="container">
    <h1>Elenco di tutte le tipologie di file</h1>
    <a href="{{route('types.create')}}">Crea nuovo tipo</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrizione</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->description }}</td>
                    <td>
                        <a href="{{ route('types.edit', $type->id) }}" class="btn btn-primary">Modifica</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
