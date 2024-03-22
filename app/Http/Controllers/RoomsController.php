<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rooms;

class RoomsController extends Controller
{
    function index($gedung = null){
        // Jika $gedung tidak disediakan atau null, tampilkan semua data ruangan
        if ($gedung === null) {
            $data = Rooms::orderBy('nama_ruangan', 'asc')->get();
        } else {
            // Jika $gedung disediakan, tampilkan hanya ruangan yang terdapat di gedung tersebut
            $data = Rooms::where('gedung', $gedung)->orderBy('nama_ruangan', 'asc')->get();
        }
        return view('rooms/index')->with('data', $data);
    }

    public function detail($id)
    {
        
        // Mengambil data ruangan berdasarkan ID
        $data = rooms::where('id', $id)->first();

        return view('rooms.show')->with('data', $data);
    }
}
