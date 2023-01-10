@extends('layouts.admin')
@section('content')
    <div class="container text-light">
        <h2>ID: {{ $project->id }}</h2>
        <h3>NAME: {{ $project->name }}</h3>
        <h5>DESCRIPTION: {{ $project->description }}</h5>
        <h3>SLUG: {{ $project->slug }}</h3>
    </div>
@endsection
