# CampusInfo

CampusInfo adalah aplikasi mini berbasis Laravel 12 yang dibuat untuk memenuhi Tugas Mandiri PPWL mengenai analisis arsitektur Laravel.

Aplikasi ini menyediakan halaman informasi kampus sekaligus menunjukkan implementasi Route, Controller, Blade View, pengiriman data dari Controller ke View, Request Lifecycle, dan informasi environment aplikasi.

## Teknologi

- Laravel 12
- PHP 8.4
- Blade Template
- HTML
- CSS
- GitHub Codespaces

## Fitur Aplikasi

CampusInfo memiliki beberapa halaman:

1. Beranda
2. Program Studi
3. Kontak
4. Architecture Dashboard
5. Request Lifecycle
6. Environment Information

## Named Routes

Aplikasi menggunakan enam named routes:

- `/` → `home`
- `/program-studi` → `program`
- `/kontak` → `kontak`
- `/architecture` → `architecture`
- `/lifecycle` → `lifecycle`
- `/environment` → `environment`

Route didefinisikan pada file:

`routes/web.php`

Navigasi antar halaman menggunakan fungsi `route()` Laravel.

## Controller

Aplikasi menggunakan dua controller utama.

### PageController

Digunakan untuk menangani halaman:

- Beranda
- Program Studi
- Kontak

Data Program Studi dan Kontak disimpan sementara dalam bentuk array pada Controller dan dikirim ke Blade View.

### ArchitectureController

Digunakan untuk menangani halaman:

- Architecture Dashboard
- Request Lifecycle
- Environment Information

## Blade View

Setiap halaman menggunakan Blade View yang terpisah pada folder:

`resources/views`

File Blade yang digunakan:

- `home.blade.php`
- `program-studi.blade.php`
- `kontak.blade.php`
- `architecture.blade.php`
- `lifecycle.blade.php`
- `environment.blade.php`

## Struktur Utama Laravel

### 1. app

Berisi kode utama aplikasi seperti Controller dan Model.

### 2. bootstrap

Berisi file yang digunakan dalam proses bootstrap atau inisialisasi aplikasi Laravel.

### 3. config

Berisi file konfigurasi aplikasi Laravel.

### 4. database

Berisi migration, seeder, dan factory yang digunakan dalam pengelolaan database.

### 5. public

Merupakan entry point aplikasi melalui `index.php` serta digunakan untuk menyimpan aset yang dapat diakses secara publik.

### 6. resources

Berisi Blade View serta resource frontend aplikasi.

### 7. routes

Berisi definisi route aplikasi. Route web CampusInfo didefinisikan pada `routes/web.php`.

### 8. .env

Berisi konfigurasi environment aplikasi seperti nama aplikasi, environment, koneksi database, dan konfigurasi lainnya.

File `.env` tidak disimpan ke repository karena dapat mengandung informasi sensitif.

## Request Lifecycle GET /program-studi

Alur request ketika pengguna membuka halaman Program Studi:

1. Browser mengirim request `GET /program-studi`.
2. Request masuk melalui `public/index.php`.
3. Laravel melakukan bootstrap aplikasi.
4. Laravel mencocokkan URL dengan route pada `routes/web.php`.
5. Route mengarahkan request ke method `programStudi()` pada `PageController`.
6. Controller menyiapkan data Program Studi dalam bentuk array.
7. Data dikirim ke `program-studi.blade.php`.
8. Blade melakukan proses rendering menjadi HTML.
9. Response HTML dikirim kembali ke browser.

Diagram alur tersebut juga tersedia secara visual pada halaman `/lifecycle`.

## Environment Information

CampusInfo memiliki halaman `/environment` untuk menampilkan informasi environment yang aman, yaitu:

- Application Name
- Application Environment
- Debug Mode
- PHP Version
- Laravel Version

Informasi sensitif seperti berikut tidak ditampilkan:

- APP_KEY
- Password database
- Token
- Credential
- API Key

## Command yang Digunakan

### Composer

Membuat project Laravel 12:

```bash
composer create-project laravel/laravel:^12.0 temp-campus
```

### Artisan

Mengecek versi Laravel:

```bash
php artisan --version
```

Membuat PageController:

```bash
php artisan make:controller PageController
```

Membuat ArchitectureController:

```bash
php artisan make:controller ArchitectureController
```

Menampilkan daftar route:

```bash
php artisan route:list
```

Menjalankan development server:

```bash
php artisan serve
```

## Analisis Laravel dan PHP Native

### Laravel

Laravel menyediakan struktur aplikasi yang terorganisasi. Route, Controller, View, konfigurasi, dan komponen lainnya memiliki lokasi serta fungsi yang jelas.

Laravel juga menyediakan berbagai fitur bawaan sehingga developer tidak perlu membuat seluruh mekanisme aplikasi dari awal.

### PHP Native

Pada PHP Native, developer memiliki fleksibilitas yang lebih besar dalam menentukan struktur aplikasi. Namun, routing, pemisahan logika aplikasi, dan struktur project umumnya perlu dirancang sendiri.

Jika aplikasi semakin besar, PHP Native dapat menjadi lebih sulit dipelihara apabila struktur kode tidak dirancang dengan baik.

### Perbandingan

Laravel lebih terstruktur karena menyediakan pola dan komponen yang jelas untuk pengembangan aplikasi. Pemisahan Route, Controller, dan View membuat kode lebih mudah dibaca dan dikembangkan.

PHP Native lebih sederhana untuk aplikasi kecil, tetapi developer harus mengatur sendiri struktur dan pemisahan tanggung jawab setiap bagian aplikasi.

## Implementasi MVC

Konsep MVC pada CampusInfo terlihat pada beberapa bagian berikut.

### Model

Pada project ini belum digunakan Model secara langsung karena database belum menjadi kebutuhan. Data masih disimpan dalam bentuk array pada Controller.

### View

View terdapat pada:

`resources/views`

Blade bertanggung jawab menampilkan data dan antarmuka kepada pengguna.

### Controller

Controller terdapat pada:

`app/Http/Controllers`

Controller bertanggung jawab menerima request dari route, menyiapkan data, kemudian mengirimkan data ke View.

## Laravel Melampaui MVC

Laravel tidak hanya menyediakan komponen Model, View, dan Controller.

Laravel juga mempunyai berbagai komponen lain, antara lain:

- Routing
- Middleware
- Service Container
- Configuration
- Environment
- Artisan CLI
- Validation
- Migration
- Dependency Injection

Komponen-komponen tersebut menunjukkan bahwa arsitektur Laravel lebih luas daripada pola MVC dasar.

## Cara Menjalankan Project

Pastikan PHP dan Composer sudah tersedia.

Clone repository:

```bash
git clone URL_REPOSITORY
```

Masuk ke folder project:

```bash
cd CampusInfo
```

Install dependency:

```bash
composer install
```

Salin file environment:

```bash
cp .env.example .env
```

Generate application key:

```bash
php artisan key:generate
```

Jalankan aplikasi:

```bash
php artisan serve
```

Kemudian akses aplikasi melalui browser.

## Kesimpulan

CampusInfo menunjukkan implementasi dasar arsitektur Laravel melalui penggunaan named route, Controller, Blade View, pengiriman data array dari Controller ke View, Request Lifecycle, dan konfigurasi environment.

Dibandingkan PHP Native, Laravel memberikan struktur aplikasi yang lebih konsisten dan menyediakan berbagai komponen tambahan di luar pola MVC sehingga aplikasi lebih mudah dikembangkan dan dipelihara.