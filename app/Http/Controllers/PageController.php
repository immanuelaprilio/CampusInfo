<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        $title = 'CampusInfo';

        return view('home', compact('title'));
    }

    public function programStudi()
    {
        $programs = [
            [
                'nama' => 'Teknik Informatika',
                'deskripsi' => 'Mempelajari pemrograman, jaringan komputer, basis data, dan pengembangan perangkat lunak.'
            ],
            [
                'nama' => 'Sistem Informasi',
                'deskripsi' => 'Mempelajari penerapan teknologi informasi untuk mendukung proses bisnis dan organisasi.'
            ],
            [
                'nama' => 'Manajemen Informatika',
                'deskripsi' => 'Mempelajari pengelolaan serta implementasi sistem informasi berbasis teknologi.'
            ]
        ];

        return view('program-studi', compact('programs'));
    }

    public function kontak()
    {
        $kontak = [
            'email' => 'info@campusinfo.test',
            'telepon' => '021-12345678',
            'alamat' => 'Jakarta'
        ];

        return view('kontak', compact('kontak'));
    }
}