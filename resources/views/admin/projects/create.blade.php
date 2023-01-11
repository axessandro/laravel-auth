@extends('layouts.admin')
@section('title', 'New project')
@section('content')
    <div class="container text-light">
        <h1 class="text-center">Create new</h1>
        <div class="container-md">

            <form action="{{ route('admin.projects.store') }}" method="POST">
                <div class="form-group mb-4">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group mb-4">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" name="description" cols="30" rows="3" class="form-control"></textarea>
                </div>
                <button class="btn btn-success" type="submit">Save</button>
            </form>
        </div>
    </div>
@endsection
