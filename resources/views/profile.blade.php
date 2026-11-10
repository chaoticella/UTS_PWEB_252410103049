@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-custom bg-white p-4">
            <div class="text-center mb-4">
                <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 80px; height: 80px; font-size: 32px;">
                    {{ strtoupper(substr($userProfile['name'], 0, 1)) }}
                </div>
                <h4 class="fw-bold mb-0">{{ $userProfile['name'] }}</h4>
                <span class="badge bg-info text-dark mt-1">{{ $userProfile['role'] }}</span>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between">
                    <span class="text-muted">NIM</span>
                    <span class="fw-semibold">{{ $userProfile['nim'] }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span class="text-muted">Program Studi</span>
                    <span class="fw-semibold">{{ $userProfile['prodi'] }}</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span class="text-muted">Fakultas</span>
                    <span class="fw-semibold">{{ $userProfile['fakultas'] }}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
