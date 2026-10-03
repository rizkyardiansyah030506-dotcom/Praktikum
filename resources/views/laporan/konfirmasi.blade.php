@extends('layouts.app')

@section('title', 'Konfirmasi Laporan')

@section('content')
    <h2>Konfirmasi Laporan</h2>

    <x-alert type="success" message="Laporan banjir Anda berhasil dikirim." />

    <div class="card">
        <p><strong>Nama Pelapor:</strong> {{ $data['nama'] }}</p>
        <p><strong>Lokasi:</strong> {{ $data['lokasi'] }}</p>
        <p><strong>Tinggi Genangan:</strong> {{ $data['tinggi'] }} cm</p>
    </div>

    <a href="{{ route('laporan.index') }}">Lihat Daftar Laporan</a>
@endsection