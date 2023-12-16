<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = [
            ["id" => 1, "nama" => "1A", "id_prodi" => 1],
            ["id" => 2, "nama" => "1B", "id_prodi" => 1],
            ["id" => 3, "nama" => "1C", "id_prodi" => 1],
            ["id" => 4, "nama" => "1D", "id_prodi" => 1],
            ["id" => 5, "nama" => "2A", "id_prodi" => 1],
            ["id" => 6, "nama" => "2B", "id_prodi" => 1],
            ["id" => 7, "nama" => "2C", "id_prodi" => 1],
            ["id" => 8, "nama" => "2D", "id_prodi" => 1]
        ];
        foreach($kelas as $j){
            Kelas::insert(
                $j
            );
        }
        
    }
}
