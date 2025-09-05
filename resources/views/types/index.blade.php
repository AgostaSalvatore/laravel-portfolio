@extends('layouts.types')

@section('title', 'Tipi')

@section('content')
<div class="container">
    <h1>Elenco di tutte le tipologie di file</h1>

    <ul>
        @foreach ($types as $type)
            <li>{{ $type->name }}</li>
        @endforeach
    </ul>
</div>
@endsection
