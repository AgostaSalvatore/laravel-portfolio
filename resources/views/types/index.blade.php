@extends('layouts.types')

@section('title', 'Tipi')

@section('content')
<div class="container">
    <h1>Elenco di tutte le tipologie di file</h1>
    <a class="btn btn-outline-primary mt-3" href="{{route('types.create')}}">Crea nuovo tipo</a>
    <a class="btn btn-outline-primary mt-3" href="{{route('projects.index')}}">Vai alla lista dei progetti</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrizione</th>
                <th class="text-center">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->id }}</td>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->description }}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('types.show', $type->id) }}" class="btn btn-primary">Visita</a>
                        <a href="{{ route('types.edit', $type->id) }}" class="btn btn-warning">Modifica</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $type->id }}">
                            Elimina
                        </button>

                        <!-- Modal per conferma eliminazione -->
                        <div class="modal fade" id="deleteModal{{ $type->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $type->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $type->id }}">Conferma Eliminazione</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Sei sicuro di voler eliminare definitivamente il tipo "<strong>{{ $type->name }}</strong>"?
                                        <br><br>
                                        <small class="text-muted">Questa azione non può essere annullata.</small>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                        <form class="d-inline" action="{{ route('types.destroy', $type->id) }}" method="POST">
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
