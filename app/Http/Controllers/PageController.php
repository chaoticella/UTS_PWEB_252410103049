<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $username = $request->input('username', 'Mahasiswa');
        return redirect()->route('dashboard', ['username' => $username]);
    }

    public function showDashboard(Request $request)
    {
        $username = $request->query('username', 'Guest');

        $stats = [
            'total_task' => 5,
            'completed' => 2,
            'in_progress' => 2,
            'pending' => 1
        ];

        return view('dashboard', compact('username', 'stats'));
    }

    public function showPengelolaan(Request $request)
    {
        $username = $request->query('username', 'Guest');

        $tasks = [
            [
                'id' => 1,
                'judul' => 'Menyelesaikan Tugas Statistika dan Probabilitas',
                'kategori' => 'Kuliah',
                'prioritas' => 'Tinggi',
                'deadline' => '2026-11-12',
                'status' => 'In Progress'
            ],
            [
                'id' => 2,
                'judul' => 'Menyelesaikan Project Pemrograman Berbasis Objek',
                'kategori' => 'Tugas Besar',
                'prioritas' => 'Tinggi',
                'deadline' => '2026-11-15',
                'status' => 'To Do'
            ],
            [
                'id' => 3,
                'judul' => 'Belajar Bahasa Pemrograman Scala untuk Pemrograman Fungsional',
                'kategori' => 'Belajar',
                'prioritas' => 'Sedang',
                'deadline' => '2026-11-10',
                'status' => 'Done'
            ],
            [
                'id' => 4,
                'judul' => 'Rapat Organisasi Mahasiswa',
                'kategori' => 'Organisasi',
                'prioritas' => 'Rendah',
                'deadline' => '2026-11-11',
                'status' => 'Done'
            ],
            [
                'id' => 5,
                'judul' => 'UTS Kecerdasan Buatan',
                'kategori' => 'Praktikum',
                'prioritas' => 'Tinggi',
                'deadline' => '2026-11-10',
                'status' => 'In Progress'
            ]
        ];

        return view('pengelolaan', compact('username', 'tasks'));
    }

    public function showProfile(Request $request)
    {
        $username = $request->query('username', 'Guest');

        $userProfile = [
            'name' => $username,
            'nim' => '250101010101',
            'prodi' => 'Informatika',
            'fakultas' => 'Fakultas Ilmu Komputer',
            'role' => 'Mahasiswa'
        ];

        return view('profile', compact('username', 'userProfile'));
    }
}
