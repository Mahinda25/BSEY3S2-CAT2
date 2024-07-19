@extends('layouts.app')

@section('content')
<h1>{{ $obituary->name }}</h1>
<p>{{ $obituary->content }}</p>
<p>Author: {{ $obituary->author }}</p>
<p>Date of Birth: {{ $obituary->date_of_birth }}</p>
<p>Date of Death: {{ $obituary->date_of_death }}</p>
@endsection

@section('meta')
<meta name="description" content="{{ Str::limit($obituary->content, 150) }}">
<meta name="keywords" content="obituary, {{ $obituary->name }}">
<meta property="og:title" content="{{ $obituary->name }}">
<meta property="og:description" content="{{ Str::limit($obituary->content, 150) }}">
<meta property="og:image" content="URL_to_your_image">
<meta property="og:url" content="{{ route('obituaries.show', $obituary) }}">
<meta name="twitter:card" content="summary_large_image">
@endsection

<a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('obituaries.show', $obituary)) }}">Share on Facebook</a>
<a href="https://twitter.com/intent/tweet?url={{ urlencode(route('obituaries.show', $obituary)) }}">Share on Twitter</a>
<link rel="canonical" href="{{ route('obituaries.show', $obituary) }}">
