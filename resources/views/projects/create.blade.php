@extends('layouts.projects')

@section('title', 'Aggiungi un post')

@section('content')
    
    <form action="{{route('projects.store')}}" method="POST">
        @csrf

        <div class="form-control mb-3 d-flex flex-column">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title">
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description"></textarea>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <label for="type">Tipo</label>
            <select name="type_id" id="type_id">
                @foreach($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- Technologies --}}

        <div class="form-control mb-3 d-flex flex-wrap">
            @foreach ($technologies as $technology)
            <div class="tag me-3">
                <input type="checkbox" name="technologies[]" value="{{$technology->id}}" id="technology-{{$technology->id}}">
                <label for="technology-{{$technology->id}}">{{$technology->name}}</label>
            </div>
            @endforeach
        </div>

        <button type="submit" value="Aggiungi">Aggiungi</button>
    </form>

@endsection