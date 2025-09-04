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
            <select name="type" id="type">
                <option value="">Seleziona un tipo</option>
                <option value="Laravel">Laravel</option>
                <option value="Web Design">Web Design</option>
                <option value="Backend">Backend</option>
                <option value="Frontend">Frontend</option>
            </select>
        </div>

        <button type="submit" value="Modifica">Modifica</button>
    </form>

@endsection