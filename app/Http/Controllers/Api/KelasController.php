<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function getKelas(){
        $kelas = Kelas::with('mahasiswa')->get();
        return response()->json([
            "status" => "success",
            "message" => "berhasil mendapatkan data semua kelas",
            "data" => $kelas
        ]);
    }
    public function getKelasById($id){
        $kelas = Kelas::with('mahasiswa')->findOrFail($id);
        return response()->json([
            "status" => "success",
            "message" => "berhasil mendapatkan data  kelas",
            "data" => $kelas
        ]);
    }
}
