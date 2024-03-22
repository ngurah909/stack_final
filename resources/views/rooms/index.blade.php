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

    <div class="btn-group gap-4 rounded-md" role="group" aria-label="Gedung Buttons">
        <button type="button" class="btn btn-primary" onclick="showTable('Gedung Lecture')">Gedung Lecture</button>
        <button type="button" class="btn btn-primary" onclick="showTable('Gedung FMIPA')">Gedung FMIPA</button>
        <button type="button" class="btn btn-primary" onclick="showTable('Gedung Informatika')">Gedung Informatika</button>
    </div>

    <table class="table" id="ruanganTable">
        <thead>
            <tr>
                <th>Nama Ruangan</th>
                <th>Gedung</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $item)
                <tr data-gedung="{{ $item->gedung }}">
                    <td>{{ $item->nama_ruangan }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        {{-- Kondisional untuk menentukan warna berdasarkan status --}}
                        @if ($item->status == 'tersedia')
                            <span class="badge bg-success text-truncate d-flex justify-content-center align-items-center">Tersedia</span>
                        @elseif ($item->status == 'tidak tersedia')
                            <span class="badge bg-danger text-truncate d-flex justify-content-center align-items-center">Tidak Tersedia</span>
                        @elseif ($item->status == 'sedang dipinjam')
                            <span class="badge bg-warning text-dark text-truncate d-flex justify-content-center align-items-center">Sedang Dipinjam</span>
                        @else
                            <span class="badge bg-secondary text-truncate d-flex justify-content-center align-items-center">{{ $item->status }}</span>
                        @endif
                    </td>
                    <td><a class="btn btn-secondary btn-sm" href="{{ url('/rooms/' . $item->id) }}">Details</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        function showTable(gedung) {
            var tableRows = document.querySelectorAll('#ruanganTable tbody tr');
            tableRows.forEach(function(row) {
                if (row.getAttribute('data-gedung') === gedung) {
                    row.style.display = 'table-row';
                } else {
                    row.style.display = 'none';
                }
            });
        }
    </script>
@endsection
