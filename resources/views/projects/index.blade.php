@extends('layouts.projects')

@section('title', 'Lista Progetti')

@section('content')
<div class="container">
    <a class="btn btn-outline-primary" href="{{route('projects.create')}}">Crea nuovo progetto</a>
    <a class="btn btn-outline-primary" href="{{route('types.index')}}">Lista Tipologie</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Tipo</th>
                <th>Data Creazione</th>
                <th>Visita</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->type ? $project->type->name : 'Nessun tipo Assegnato' }}</td>
                    <td>{{ $project->created_at }}</td>
                    <td><a href="{{ route('projects.show', $project->id) }}">Show</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection
