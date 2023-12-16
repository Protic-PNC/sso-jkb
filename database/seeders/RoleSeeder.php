<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = [
            ["id" => 1, "nama" => "walikelas"],
            ["id" => 2, "nama" => "dosen"],
            ["id" => 3, "nama" => "kaprodi"]
        ];
        foreach ($role as $j) {
            Role::insert(
                $j
            );
        }
    }
}
