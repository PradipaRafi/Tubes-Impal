<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page - FastingMate</title>
    <!-- Link ke CSS Anda -->
    <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- Section Utama -->
    <section class="landing-section">
        <div class="container">
            <h1>FastingMate</h1>
            <p>Selamat Datang Di FastingMate</p>
            <a href="{{ route('login') }}">
                <button id="startButton">Mulai</button>
            </a>
        </div>
        <div class="background-overlay"></div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Link ke JS Anda -->
    <script src="{{ asset('js/landingpage.js') }}"></script>
</body>
</html>