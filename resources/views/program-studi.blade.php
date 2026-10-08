<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Program Studi - CampusInfo</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f6f9;
            color: #333;
        }

        nav {
            background-color: #2563eb;
            padding: 18px 40px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 25px;
            font-weight: bold;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 40px;
        }

        h1 {
            color: #2563eb;
        }

        .card {
            background-color: white;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .card h2 {
            color: #2563eb;
            margin-top: 0;
        }
    </style>
</head>

<body>

<nav>
    <a href="{{ route('home', [], false) }}">Beranda
    <a href="{{ route('program', [], false) }}">Program Studi</a>
    <a href="{{ route('kontak', [], false) }}">Kontak</a>
    <a href="{{ route('architecture', [], false) }}">Architecture</a>
    <a href="{{ route('lifecycle', [], false) }}">Lifecycle</a>
    <a href="{{ route('environment', [], false) }}">Environment</a>
</nav>

<div class="container">

    <h1>Program Studi</h1>

    <p>Daftar program studi yang tersedia di CampusInfo.</p>

    @foreach ($programs as $program)
        <div class="card">
            <h2>{{ $program['nama'] }}</h2>
            <p>{{ $program['deskripsi'] }}</p>
        </div>
    @endforeach

</div>

</body>
</html>