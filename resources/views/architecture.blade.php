<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Architecture Dashboard - CampusInfo</title>

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
            max-width: 1000px;
            margin: 50px auto;
            padding: 40px;
        }

        h1 {
            color: #2563eb;
        }

        .description {
            margin-bottom: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        th {
            background-color: #2563eb;
            color: white;
            text-align: left;
            padding: 15px;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        tr:last-child td {
            border-bottom: none;
        }

        .folder {
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

    <h1>Laravel Architecture Dashboard</h1>

    <p class="description">
        Halaman ini menampilkan struktur folder dan file utama
        pada aplikasi Laravel beserta fungsi masing-masing.
    </p>

    <table>
        <thead>
            <tr>
                <th>Folder / File</th>
                <th>Fungsi</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($structures as $item)
                <tr>
                    <td class="folder">{{ $item['nama'] }}</td>
                    <td>{{ $item['fungsi'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>