@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Programs</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Short Name</th>
                <th>College ID</th>
                <th>Department ID</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($programs as $program)
                <tr>
                    <td>{{ $program->id }}</td>
                    <td>{{ $program->progfullname }}</td>
                    <td>{{ $program->progshortname }}</td>
                    <td>{{ $program->progcollid }}</td>
                    <td>{{ $program->progcolldeptid }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ url('/show/colleges') }}" class="btn btn-secondary">College Listing</a>
</div>
@endsection
