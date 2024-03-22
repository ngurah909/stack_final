<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RoomsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data yang ingin Anda masukkan ke dalam tabel 'rooms'
        $rooms = [
            [
                'nama_ruangan' => 'Ruangan 1.1',
                'gedung' => 'Gedung FMIPA',
                'deskripsi' => 'Ruangan besar dengan kapasitas 50 orang',
                'status' => 'tersedia',
            ],
            [
                'nama_ruangan' => 'Ruangan 1.2',
                'gedung' => 'Gedung FMIPA',
                'deskripsi' => 'Ruangan kecil dengan kapasitas 20 orang',
                'status' => 'tersedia',
            ],
            [
                'nama_ruangan' => 'Ruangan 1.3',
                'gedung' => 'Gedung FMIPA',
                'deskripsi' => 'Ruangan laboratorium dengan peralatan lengkap',
                'status' => 'tersedia',
            ],
        ];

        foreach ($rooms as $room) {
            // Masukkan data ke dalam tabel 'rooms' dan ambil ID yang baru dimasukkan
            $roomId = DB::table('rooms')->insertGetId($room);

            // Atur nilai 'created_at' dan 'updated_at' untuk data yang baru dimasukkan
            DB::table('rooms')->where('id', $roomId)->update([
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

