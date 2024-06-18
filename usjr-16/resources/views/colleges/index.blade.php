@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Colleges</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Short Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($colleges as $college)
                <tr>
                    <td>{{ $college->id }}</td>
                    <td>{{ $college->collfullname }}</td>
                    <td>{{ $college->collshortname }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
