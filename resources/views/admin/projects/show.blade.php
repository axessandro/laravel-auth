@extends('layouts.admin')
@section('title', $project->name)
@section('content')
    <div class="container text-light d-flex justify-content-center mt-4">
        <div class="card" style="width: 30rem;">
            <ul class="list-group list-group-flush">

                {{-- id --}}
                <li class="list-group-item d-flex justify-content-between">
                    <span class="text-secondary">id:</span>
                    <span>{{ $project->id }}</span>
                </li>
                {{-- id --}}

                {{-- name --}}
                <li class="list-group-item d-flex justify-content-between">
                    <span class="text-secondary">name:</span>
                    <span>{{ $project->name }}</span>
                </li>
                {{-- name --}}

                {{-- description --}}
                <li class="list-group-item d-flex justify-content-between">
                    <span class="text-secondary">description:</span>
                    <span>{{ $project->description }}</span>
                </li>
                {{-- description --}}

                {{-- slug --}}
                <li class="list-group-item d-flex justify-content-between">
                    <span class="text-secondary">slug:</span>
                    <span>{{ $project->slug }}</span>
                </li>
                {{-- slug --}}

            </ul>
        </div>
    </div>
@endsection
