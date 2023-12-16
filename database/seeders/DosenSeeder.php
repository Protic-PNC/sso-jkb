<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosen = [
            ["id" => 1, "nidn" => 789798, "nama" => "dosen1", "id_prodi" => 1],
            ["id" => 789798, "nidn" => 789798, "nama" => "dosen2", "id_prodi" => 2],
            ["id" => 789799, "nidn" => 789799, "nama" => "dosen3", "id_prodi" => 1]
        ];
        foreach ($dosen as $j) {

            Dosen::insert($j);
        }
    }
}
