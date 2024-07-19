@extends('layouts.app')

@section('content')
<h1>Obituaries</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Date of Birth</th>
            <th>Date of Death</th>
            <th>Content</th>
            <th>Author</th>
            <th>Submission Date</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($obituaries as $obituary)
            <tr>
                <td>{{ $obituary->name }}</td>
                <td>{{ $obituary->date_of_birth }}</td>
                <td>{{ $obituary->date_of_death }}</td>
                <td>{{ $obituary->content }}</td>
                <td>{{ $obituary->author }}</td>
                <td>{{ $obituary->submission_date }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $obituaries->links() }}
@endsection
