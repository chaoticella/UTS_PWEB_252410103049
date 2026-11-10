@extends('layouts.app')

@section('title', 'Pengelolaan Task')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3 class="fw-bold mb-0">Daftar Pengelolaan Task</h3>
        <p class="text-muted mb-0">Daftar aktivitas & deadline milik <strong>{{ $username }}</strong></p>
    </div>
    <button class="btn btn-success fw-semibold">+ Tambah Task Baru</button>
</div>

<div class="card card-custom bg-white p-3">
    <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Judul Task</th>
                    <th>Kategori</th>
                    <th>Prioritas</th>
                    <th>Deadline</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td class="fw-semibold text-dark">{{ $item['judul'] }}</td>
                        <td><span class="badge bg-secondary">{{ $item['kategori'] }}</span></td>
                        <td>
                            @if($item['prioritas'] == 'Tinggi')
                                <span class="badge bg-danger">Tinggi</span>
                            @elseif($item['prioritas'] == 'Sedang')
                                <span class="badge bg-warning text-dark">Sedang</span>
                            @else
                                <span class="badge bg-info text-dark">Rendah</span>
                            @endif
                        </td>
                        <td><code>{{ $item['deadline'] }}</code></td>
                        <td>
                            @if($item['status'] == 'Done')
                                <span class="badge bg-success">Done</span>
                            @elseif($item['status'] == 'In Progress')
                                <span class="badge bg-warning text-dark">In Progress</span>
                            @else
                                <span class="badge bg-light text-dark border">To Do</span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
