@extends('layouts.app')

@section('title', 'Obituaries')

@section('content')
<h1>Obituaries</h1>
@foreach ($obituaries as $obituary)
    <div class="obituary">
        <a href="{{ route('obituaries.show', $obituary->id) }}">{{ $obituary->name }}</a>
        <p>{{ $obituary->content}}</p>
        <small>Author: {{ $obituary->author }}</small>
    </div>
@endforeach
@endsection
