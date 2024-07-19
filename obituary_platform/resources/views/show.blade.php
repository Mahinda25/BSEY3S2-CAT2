<head>
    <title>{{ $obituary->name }}'s Obituary</title>
    <meta name="description" content="{{ Str::limit($obituary->content, 150) }}">
    <meta name="keywords" content="obituary, {{ $obituary->name }}">
    <meta property="og:title" content="{{ $obituary->name }}'s Obituary">
    <meta property="og:description" content="{{ Str::limit($obituary->content, 150) }}">
    <meta property="og:url" content="{{ url()->current() }}">
</head>
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Obituary",
    "name": "{{ $obituary->name }}",
    "dateOfBirth": "{{ $obituary->date_of_birth }}",
    "dateOfDeath": "{{ $obituary->date_of_death }}",
    "author": {
        "@type": "Person",
        "name": "{{ $obituary->author }}"
    },
    "text": "{{ $obituary->content }}"
}
</script>
<a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank">Share on Facebook</a>
<a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($obituary->name) }}" target="_blank">Share on Twitter</a>
