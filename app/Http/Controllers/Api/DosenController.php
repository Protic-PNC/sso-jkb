<?php

namespace App\Http\Controllers\Api;

use App\Models\Dosen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DosenController extends Controller
{
    public function getDosen()
    {
     
        try {
            # code...
            $Dosen = Dosen::with('prodi','roles')->get();
            return response()->json([
                "status" => "success",
                "message" => "berhasil mendapatkan data semua Dosen",
                "data" => $Dosen
            ]);
        } catch (\Throwable $e) {
            # code...
            return response()->json([
                "status" => "failed",
                "message" => $e->getMessage(),
            ]);
        }
    }
    public function getDosenById($id)
    {
       
        try {
            # code...
            $Dosen = Dosen::with('prodi')->findOrFail($id);
            return response()->json([
                "status" => "success",
                "message" => "berhasil mendapatkan data  Dosen",
                "data" => $Dosen
            ]);
        } catch (\Throwable $e) {
            # code...
            return response()->json([
                "status" => "failed",
                "message" => $e->getMessage(),
            ]);
        }
    }
    public function store(Request $request)
    {
        try {
            # code...
            $DosenData = [
                "id" =>$request->input('nidn'),
                "nama" => $request->input('nama'),
                "nidn" => $request->input('nidn'),
                "id_prodi" => $request->input('id_prodi')
            ];
        
            $insertDosen = Dosen::create($DosenData);
        
            return response()->json([
                "status" => "success",
                "message" => "berhasil menambahkan data  Dosen",
                "data" => $insertDosen
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
            $DosenData = [
                "id" => $request->input('nidn'),
                "nama" => $request->input('nama'),
                "nidn" => $request->input('nidn'),
                "id_prodi" => $request->input('id_prodi')
            ];

        
            $Dosen = Dosen::findOrFail($id);
            $Dosen->update($DosenData);
        
            return response()->json([
                "status" => "success",
                "message" => "berhasil update data  Dosen",
                "data" => $Dosen
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
        

        
            $Dosen = Dosen::findOrFail($id);
            $Dosen->delete();
        
            return response()->json([
                "status" => "success",
                "message" => "berhasil delete data  Dosen",
                "data" => $Dosen
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
