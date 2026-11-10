@extends('layouts.app')

@section('title', 'Dashboard Ringkasan')

@section('content')
<div class="row mb-4">
    <div class="col-12">
        <div class="p-4 bg-soft-plum text-white rounded-4 shadow-sm">
    <h2 class="fw-bold">Selamat Datang Kembali, {{ $username }}!</h2>
    <p class="mb-0">Berikut adalah statistik ringkasan produktivitas tugas kamu hari ini.</p>
        </div>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-3">
        <div class="card card-custom p-3 bg-white text-center">
            <h6 class="text-muted mb-1">Total Tugas</h6>
            <h2 class="fw-bold text-dark mb-0">{{ $stats['total_task'] }}</h2>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-custom p-3 bg-white text-center">
            <h6 class="text-muted mb-1">Selesai (Done)</h6>
            <h2 class="fw-bold text-success mb-0">{{ $stats['completed'] }}</h2>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-custom p-3 bg-white text-center">
            <h6 class="text-muted mb-1">In Progress</h6>
            <h2 class="fw-bold text-warning mb-0">{{ $stats['in_progress'] }}</h2>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-custom p-3 bg-white text-center">
            <h6 class="text-muted mb-1">Pending (To Do)</h6>
            <h2 class="fw-bold text-danger mb-0">{{ $stats['pending'] }}</h2>
        </div>
    </div>
</div>

<div class="mt-4 text-end">
    <a href="{{ route('pengelolaan', ['username' => $username]) }}" class="btn btn-soft-plum px-4 fw-semibold">
    Kelola Semua Task →
    </a>
</div>
@endsection
