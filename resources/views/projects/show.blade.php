@extends('layouts.projects')

@section('title', 'Progetto ' . $project->title)

@section('content')
<div class="container">
    <h1>{{ $project->title }}</h1>
    <p>{{ $project->description }}</p>
    <p>{{ $project->created_at }}</p>
</div>
@endsection