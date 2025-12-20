<!DOCTYPE html>
<html lang="en">
<head>
    <title>Unguided 2</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <h2>Contoh Gambar</h2>
    <img src="{{ asset('assets/img/gambar.png') }}" alt="Gambar">

    <h2>JavaScript</h2>
    <button onclick="tampilPesan()">Klik Saya</button>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
