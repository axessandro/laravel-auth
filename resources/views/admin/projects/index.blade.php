@extends('layouts.admin')
@section('content')
    <div class="bg-dark m-auto">

        <table class="table mb-0 table-striped table-secondary">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- rows --}}
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->created_at }}</td>
                        {{-- actions --}}
                        <td>
                            <div class="d-flex">
                                <a class="btn btn-primary text-light text-decoration-none mx-1" href="#"><i
                                        class="fa-solid fa-circle-info"></i></a>
                                <a class="btn btn-warning text-light mx-1" href="#"><i
                                        class="fa-solid fa-pencil"></i></a>
                            </div>
                        </td>
                        {{-- actions --}}
                    </tr>
                @endforeach
                {{-- rows --}}
            </tbody>
        </table>
    </div>
@endsection
