<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPeminjaman;

class RiwayatPeminjamanController extends Controller
{
    public function index()
    {
        $riwayatPeminjaman = RiwayatPeminjaman::all();
        return response()->json($riwayatPeminjaman, 200);
    }

    public function show($id)
    {
        $riwayatPeminjaman = RiwayatPeminjaman::find($id);
        if (!$riwayatPeminjaman) {
            return response()->json(['message' => 'Riwayat Peminjaman not found'], 404);
        }
        return response()->json($riwayatPeminjaman, 200);
    }
}