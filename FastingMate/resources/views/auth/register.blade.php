<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - FastingMate</title>
    <!-- Link ke CSS Anda -->
    <link rel="stylesheet" href="{{ asset('css/registerpage.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="register-container">
        <h1>DAFTAR AKUN</h1>
        <!-- Gambar yang sudah ada -->
        <img src="{{ asset('img/buah1.png') }}" alt="Vegetables" class="register-image">

        <!-- Form Register -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nama Lengkap -->
            <div>
                <input type="text" id="name" name="name" placeholder="Nama Lengkap" required autofocus>
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Email -->
            <div>
                <input type="email" id="email" name="email" placeholder="Email" required>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div>
                <input type="password" id="password" name="password" placeholder="Password" required>
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Konfirmasi Password -->
            <div>
                <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi Password" required>
                @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="register-button">Daftar</button>
        </form>

        <!-- Link Login -->
        <p class="login-link">
            Sudah Memiliki Akun? <a href="{{ route('login') }}">Login</a>
        </p>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Link ke JS Anda -->
    <script src="{{ asset('js/registerpage.js') }}"></script>
</body>
</html>