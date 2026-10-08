<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Request Lifecycle - CampusInfo</title>

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
            text-align: center;
        }

        .description {
            text-align: center;
            margin-bottom: 35px;
        }

        .box {
            background-color: white;
            border-left: 5px solid #2563eb;
            padding: 18px;
            margin: 10px auto;
            max-width: 600px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
        }

        .arrow {
            text-align: center;
            font-size: 28px;
            color: #2563eb;
            font-weight: bold;
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

    <h1>Request Lifecycle</h1>

    <p class="description">
        Alur request GET /program-studi pada aplikasi CampusInfo.
    </p>

    <div class="box">
        1. Browser mengakses GET /program-studi
    </div>

    <div class="arrow">↓</div>

    <div class="box">
        2. Request masuk melalui public/index.php
    </div>

    <div class="arrow">↓</div>

    <div class="box">
        3. Laravel melakukan bootstrap aplikasi
    </div>

    <div class="arrow">↓</div>

    <div class="box">
        4. routes/web.php mencocokkan URL /program-studi
    </div>

    <div class="arrow">↓</div>

    <div class="box">
        5. PageController menjalankan method programStudi()
    </div>

    <div class="arrow">↓</div>

    <div class="box">
        6. Controller menyiapkan data program studi dalam bentuk array
    </div>

    <div class="arrow">↓</div>

    <div class="box">
        7. Data dikirim ke program-studi.blade.php
    </div>

    <div class="arrow">↓</div>

    <div class="box">
        8. Blade melakukan rendering menjadi HTML
    </div>

    <div class="arrow">↓</div>

    <div class="box">
        9. Response HTML dikirim kembali ke browser
    </div>

</div>

</body>
</html>