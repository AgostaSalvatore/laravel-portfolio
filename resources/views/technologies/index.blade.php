@extends('layouts.types')

@section('title', 'Tipi')

@section('content')
<div class="container">
    <h1>Elenco di tutte le tipologie di file</h1>
    <a class="btn btn-outline-primary mt-3" href="{{route('technologies.create')}}">Crea nuova Tecnologia</a>
    <a class="btn btn-outline-primary mt-3" href="{{route('types.index')}}">Vai alla lista Tipologie</a>
    <a class="btn btn-outline-primary mt-3" href="{{route('projects.index')}}">Vai alla lista dei progetti</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Hex Color</th>
                <th class="text-center">Colore Assegnato</th>
                <th class="text-center">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($technologies as $technology)
                <tr>
                    <td>{{ $technology->id }}</td>
                    <td>{{ $technology->name }}</td>
                    <td>{{ $technology->color }}</td>
                    <td class="text-center">
                        <span class="color-preview" style="display: inline-block; width: 20px; height: 20px; background-color: {{ $technology->color }}; border: 1px solid #ccc; border-radius: 3px;"></span>
                    </td>
                    <td class="d-flex gap-2 justify-content-center">
                        <a href="{{ route('technologies.show', $technology->id) }}" class="btn btn-primary">Visita</a>
                        <a href="{{ route('technologies.edit', $technology->id) }}" class="btn btn-warning">Modifica</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $technology->id }}">
                            Elimina
                        </button>

                        <!-- Modal per conferma eliminazione -->
                        <div class="modal fade" id="deleteModal{{ $technology->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $technology->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $technology->id }}">Conferma Eliminazione</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Sei sicuro di voler eliminare definitivamente la tecnologia "<strong>{{ $technology->name }}</strong>"?
                                        <br><br>
                                        <small class="text-muted">Questa azione non può essere annullata.</small>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                        <form class="d-inline" action="{{ route('technologies.destroy', $technology->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Elimina Definitivamente</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
