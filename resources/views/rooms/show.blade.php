@extends('layout.aplikasi')

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Sistem Informasi Pinjam Ruang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Ruangan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profil</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endsection

@section('konten')
<hr class="my-4"> <!-- Garis pemisah -->

<table class="table">
    <thead>
        <tr>
            <th>ID Peminjaman</th>
            <th>Nama Pengguna</th>
            <th>Nama Ruangan</th>
            <th>Waktu Mulai</th>
            <th>Waktu Selesai</th>
            <th>Catatan</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->room->nama_ruangan }}</td>
                <td>{{ $item->start_time }}</td>
                <td>{{ $item->end_time }}</td>
                <td>{{ $item->note }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
