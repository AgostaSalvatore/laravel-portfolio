@extends('layouts.projects')

@section('title', 'Progetto ' . $project->title)

@section('content')
<div class="container">
    <h1> Title: {{ $project->title }}</h1>
    <p> Description: {{ $project->description }}</p>
    <p> Type: {{ $project->type }}</p>
</div>
@endsection