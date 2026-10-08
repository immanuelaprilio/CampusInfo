<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Environment Information - CampusInfo</title>

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
            margin: 60px auto;
            padding: 40px;
        }

        h1 {
            color: #2563eb;
        }

        .card {
            background-color: white;
            border-radius: 12px;
            padding: 30px;
            margin-top: 25px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .item {
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
        }

        .item:last-child {
            border-bottom: none;
        }

        .label {
            color: #2563eb;
            font-weight: bold;
        }

        .warning {
            margin-top: 25px;
            padding: 15px;
            background-color: #eff6ff;
            border-left: 5px solid #2563eb;
            border-radius: 6px;
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

    <h1>Environment Information</h1>

    <p>
        Informasi environment aplikasi CampusInfo yang aman
        untuk ditampilkan.
    </p>

    <div class="card">

        <div class="item">
            <span class="label">Application Name:</span>
            {{ $environment['app_name'] }}
        </div>

        <div class="item">
            <span class="label">Environment:</span>
            {{ $environment['environment'] }}
        </div>

        <div class="item">
            <span class="label">Debug Mode:</span>
            {{ $environment['debug'] }}
        </div>

        <div class="item">
            <span class="label">PHP Version:</span>
            {{ $environment['php_version'] }}
        </div>

        <div class="item">
            <span class="label">Laravel Version:</span>
            {{ $environment['laravel_version'] }}
        </div>

    </div>

    <div class="warning">
        Informasi sensitif seperti APP_KEY, password database,
        token, dan credential tidak ditampilkan demi keamanan.
    </div>

</div>

</body>
</html>