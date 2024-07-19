<!DOCTYPE html>
<html>
<head>
    <title>Submit Obituary</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Add your custom CSS here */
    </style>
    <script>
        // Add JavaScript for form validation here
    </script>
</head>
<body>
    <div class="container">
        <h1>Submit Obituary</h1>
        <form method="POST" action="{{ route('obituaries.store') }}">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth" required>
            
            <label for="date_of_death">Date of Death:</label>
            <input type="date" id="date_of_death" name="date_of_death" required>
            
            <label for="content">Content:</label>
            <textarea id="content" name="content" required></textarea>
            
            <label for="author">Author:</label>
            <input type="text" id="author" name="author" required>
            
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
