<?php

namespace App\Http\Controllers;

class ArchitectureController extends Controller
{
    public function index()
    {
        $structures = [
            [
                'nama' => 'app',
                'fungsi' => 'Berisi kode utama aplikasi seperti Controller dan Model.'
            ],
            [
                'nama' => 'bootstrap',
                'fungsi' => 'Berisi file yang digunakan untuk proses bootstrap aplikasi Laravel.'
            ],
            [
                'nama' => 'config',
                'fungsi' => 'Berisi berbagai file konfigurasi aplikasi.'
            ],
            [
                'nama' => 'database',
                'fungsi' => 'Berisi migration, seeder, dan factory untuk pengelolaan database.'
            ],
            [
                'nama' => 'public',
                'fungsi' => 'Menjadi entry point aplikasi dan tempat aset publik.'
            ],
            [
                'nama' => 'resources',
                'fungsi' => 'Berisi Blade View dan aset frontend aplikasi.'
            ],
            [
                'nama' => 'routes',
                'fungsi' => 'Berisi definisi route aplikasi.'
            ],
            [
                'nama' => '.env',
                'fungsi' => 'Berisi konfigurasi environment aplikasi.'
            ]
        ];

        return view('architecture', compact('structures'));
    }

    public function lifecycle()
    {
        return view('lifecycle');
    }

    public function environment()
    {
        $environment = [
            'app_name' => config('app.name'),
            'environment' => app()->environment(),
            'debug' => config('app.debug') ? 'Aktif' : 'Tidak Aktif',
            'php_version' => PHP_VERSION,
            'laravel_version' => app()->version()
        ];

        return view('environment', compact('environment'));
    }
}