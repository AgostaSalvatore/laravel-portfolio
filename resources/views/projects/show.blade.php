@extends('layouts.projects')

@section('title', 'Progetto ' . $project->title)

@section('content')
<div class="container">
    <a class=" py-3 m-3 btn btn-outline-primary" href="{{ route('projects.index') }}">Torna alla lista</a>
    <a class=" py-3 m-3 btn btn-outline-warning" href="{{ route('projects.edit', $project) }}">Modifica</a>

    <form class="d-inline" action="{{ route('projects.destroy', $project) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class=" py-3 m-3 btn btn-outline-danger">Elimina</button>
    </form>


    <h1> Title: {{ $project->title }}</h1>
    <p> Description: {{ $project->description }}</p>
    <p> Type: {{ $project->type }}</p>
</div>
@endsection