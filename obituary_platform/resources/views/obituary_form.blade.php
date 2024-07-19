<!DOCTYPE html>
<html>
<head>
    <title>Submit Obituary</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="container">
        <h1>Submit Obituary</h1>
        <form method="POST" action="{{ route('obituaries.store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Name:</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>Date of Birth:</label>
                <input type="date" name="date_of_birth" required>
            </div>
            <div>
                <label>Date of Death:</label>
                <input type="date" name="date_of_death" required>
            </div>
            <div>
                <label>Content:</label>
                <textarea name="content" required></textarea>
            </div>
            <div>
                <label>Author:</label>
                <input type="text" name="author" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
