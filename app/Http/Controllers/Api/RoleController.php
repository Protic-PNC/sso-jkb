<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\HasARole;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function getHasARole(){
        $role = HasARole::with('dosen','role')->get();
        return response()->json([
            "status" => "success",
            "message" => "berhasil mendapatkan semua role",
            "data" => $role
        ]);

    }
    public function getRole(){
        $role = Role::all();
        return response()->json([
            "status" => "success",
            "message" => "berhasil mendapatkan semua role",
            "data" => $role
        ]);

    }


}
