<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    // Menampilkan halaman form
    public function create()
    {
        return view('laporan.create');
    }

    // Menerima data dari form (POST), lalu tampilkan konfirmasi
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'   => 'required|string|max:100',
            'lokasi' => 'required|string|max:150',
            'tinggi' => 'required|numeric|min:0',
        ]);

        return view('laporan.konfirmasi', compact('data'));
    }

    // Menampilkan daftar laporan (data contoh berupa array)
    public function index()
    {
        $laporans = [
            ['nama' => 'Budi Santoso',  'lokasi' => 'Dayeuhkolot', 'tinggi' => 85],
            ['nama' => 'Ani Lestari',   'lokasi' => 'Baleendah',   'tinggi' => 45],
            ['nama' => 'Cecep Hidayat', 'lokasi' => 'Rancaekek',   'tinggi' => 20],
        ];

        return view('laporan.index', compact('laporans'));
    }
}