<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kontak - CampusInfo</title>

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
            padding: 30px;
            margin-top: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .label {
            font-weight: bold;
            color: #2563eb;
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

    <h1>Kontak CampusInfo</h1>

    <p>Hubungi CampusInfo melalui informasi berikut.</p>

    <div class="card">
        <p>
            <span class="label">Email:</span>
            {{ $kontak['email'] }}
        </p>

        <p>
            <span class="label">Telepon:</span>
            {{ $kontak['telepon'] }}
        </p>

        <p>
            <span class="label">Alamat:</span>
            {{ $kontak['alamat'] }}
        </p>
    </div>

</div>

</body>
</html>