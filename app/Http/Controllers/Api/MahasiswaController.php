<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function getMhs()
    {
        $mahasiswa = Mahasiswa::with('kelas')->get();
        return response()->json([
            "status" => "success",
            "message" => "berhasil mendapatkan data semua mahasiswa",
            "data" => $mahasiswa
        ]);
    }
    public function getMhsById($id)
    {
        $mahasiswa = Mahasiswa::with('kelas')->findOrFail($id);
        return response()->json([
            "status" => "success",
            "message" => "berhasil mendapatkan data  mahasiswa",
            "data" => $mahasiswa
        ]);
    }
    public function store(Request $request)
    {
        try {
            # code...
            $mahasiswaData = [
                "id" =>$request->input('nim'),
                "nama" => $request->input('nama'),
                "nim" => $request->input('nim'),
                "id_kelas" => $request->input('id_kelas')
            ];
        
            $insertMahasiswa = Mahasiswa::create($mahasiswaData);
        
            return response()->json([
                "status" => "success",
                "message" => "berhasil menambahkan data  mahasiswa",
                "data" => $insertMahasiswa
            ]);
        } catch (\Throwable $e) {
            # code...
            return response()->json([
                "status" => "failed",
                "message" => $e->getMessage(),
            ]);
        }
    }
    public function update(Request $request,$id)
    {
        try {
            # code...
            $mahasiswaData = [
                "nama" => $request->input('nama'),
                "nim" => $request->input('nim'),
                "id_kelas" => $request->input('id_kelas')
            ];

        
            $mhs = Mahasiswa::findOrFail($id);
            $mhs->update($mahasiswaData);
        
            return response()->json([
                "status" => "success",
                "message" => "berhasil update data  mahasiswa",
                "data" => $mhs
            ]);
        } catch (\Throwable $e) {
            # code...
            return response()->json([
                "status" => "failed",
                "message" => $e->getMessage(),
            ]);
        }
    }
    public function delete(Request $request,$id)
    {
        try {
            # code...
        

        
            $mhs = Mahasiswa::findOrFail($id);
            $mhs->delete();
        
            return response()->json([
                "status" => "success",
                "message" => "berhasil delete data  mahasiswa",
                "data" => $mhs
            ]);
        } catch (\Throwable $e) {
            # code...
            return response()->json([
                "status" => "failed",
                "message" => $e->getMessage(),
            ]);
        }
    }
}