<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obituary Platform</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Welcome to the Obituary Platform</h1>
        <nav>
            <a href="{{ route('obituaries.index') }}">View Obituaries</a>
            <a href="{{ route('obituaries.create') }}">Submit an Obituary</a>
        </nav>
    </header>
    <main>
        <section>
            <h2>Manage and Display Obituaries</h2>
            <p>Submit and manage obituaries easily, and optimize them for search engines and social media.</p>
        </section>
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Obituary Platform. All rights reserved.</p>
    </footer>
</body>
</html>
