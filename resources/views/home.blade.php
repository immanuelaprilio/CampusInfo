<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title }}</title>
<style>
body { font-family: Arial, sans-serif; margin: 0; background: #f4f6f9; color: #333; }
nav { background: #2563eb; padding: 18px 40px; }
nav a { color: white; text-decoration: none; margin-right: 25px; font-weight: bold; }
.container { max-width: 900px; margin: 80px auto; padding: 40px; background: white; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,.08); }
h1 { color: #2563eb; }
.button { display: inline-block; margin-top: 15px; background: #2563eb; color: white; padding: 12px 20px; text-decoration: none; border-radius: 8px; }
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
<h1>Selamat Datang di {{ $title }}</h1>

<p>
CampusInfo merupakan aplikasi mini berbasis Laravel 12
untuk menampilkan informasi kampus sekaligus mempelajari
arsitektur aplikasi Laravel.
</p>

<p>
Melalui aplikasi ini, pengguna dapat melihat informasi
program studi, kontak, arsitektur Laravel, request lifecycle,
dan environment aplikasi.
</p>

<a href="/program-studi" class="button">Lihat Program Studi</a>
</div>

</body>
</html>
