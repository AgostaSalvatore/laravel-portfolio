@extends('layouts.projects')

@section('title', 'Aggiungi un post')

@section('content')
    
    <form action="{{route('projects.update', $project)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-control mb-3 d-flex">
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{ $project->title }}">
        </div>

        <div class="form-control mb-3 d-flex">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description">{{ $project->description }}</textarea>
        </div>

        <div class="form-control mb-3 d-flex">
            <label for="type">Tipo</label>
            <select name="type_id" id="type_id">
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{$project->type_id == $type->id ? 'selected' : ''}}>{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        
        {{-- Technologies --}}

        <div class="form-control mb-3 d-flex flex-wrap">
            @foreach ($technologies as $technology)
            <div class="tag me-3">
                <input 
                type="checkbox" 
                name="technologies[]" 
                value="{{$technology->id}}" 
                id="technology-{{$technology->id}}"
                {{ $project->technologies->contains($technology->id) ? 'checked' : '' }}>
                <label for="technology-{{$technology->id}}">{{$technology->name}}</label>
            </div>
            @endforeach
        </div>

        <button type="submit" value="Modifica">Modifica</button>
    </form>

@endsection