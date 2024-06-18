@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Students</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Program ID</th>
                <th>College ID</th>
                <th>Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->studfirstname }}</td>
                    <td>{{ $student->studlastname }}</td>
                    <td>{{ $student->studmidname }}</td>
                    <td>{{ $student->studprogid }}</td>
                    <td>{{ $student->studcolid }}</td>
                    <td>{{ $student->studyyear }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
