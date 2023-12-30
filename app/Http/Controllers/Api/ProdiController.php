<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function getProdi(){
        $kelas = Prodi::with('jenjang')->get();
        return response()->json([
            "status" => "success",
            "message" => "berhasil mendapatkan data semua prodi",
            "data" => $kelas
        ]);
    }
    public function getProdiById($id){
        $kelas = Prodi::with('jenjang')->findOrFail($id);
        return response()->json([
            "status" => "success",
            "message" => "berhasil mendapatkan data prodi",
            "data" => $kelas
        ]);
    }

    
}
