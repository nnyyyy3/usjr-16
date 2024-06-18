@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Departments</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Short Name</th>
                <th>College ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td>{{ $department->deptfullname }}</td>
                    <td>{{ $department->deptshortname }}</td>
                    <td>{{ $department->deptcollid }}</td>
                    <td>
                        <a href="{{ url('/show/programs', $department->id) }}" class="btn btn-primary">More Info</a>
                        <a href="{{ url('/show/colleges') }}" class="btn btn-secondary">College Listing</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
