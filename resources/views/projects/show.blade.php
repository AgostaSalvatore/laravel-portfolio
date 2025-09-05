@extends('layouts.projects')

@section('title', 'Progetto ' . $project->title)

@section('content')
<div class="container">
    <a class=" py-3 m-3 btn btn-outline-primary" href="{{ route('projects.index') }}">Torna alla lista</a>
    <a class=" py-3 m-3 btn btn-outline-warning" href="{{ route('projects.edit', $project) }}">Modifica</a>

    <button type="button" class="py-3 m-3 btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
        Elimina
    </button>

    <!-- Modal per conferma eliminazione -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Conferma Eliminazione</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei sicuro di voler eliminare definitivamente il progetto "<strong>{{ $project->title }}</strong>"?
                    <br><br>
                    <small class="text-muted">Questa azione non può essere annullata.</small>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form class="d-inline" action="{{ route('projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina Definitivamente</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <h1> Title: {{ $project->title }}</h1>
    <p> Description: {{ $project->description }}</p>
    <p> Type: {{ $project->type->name }}</p>
</div>
@endsection