@extends('layouts.admin')
@section('title', 'Edit')
@section('content')
    <div class="container text-light">
        <h1 class="text-center">Edit</h1>
        <div class="container-md">

            <form action="{{ route('admin.projects.update', $project->slug) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group mb-4">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $project->name) }}"
                        class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group mb-4">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" name="description" cols="30" rows="3"
                        class="form-control @error('description') is-invalid @enderror">{{ old('description', $project->description) }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button class="btn btn-success" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection
