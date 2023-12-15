<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Prodi::insert(
            ["id"=>1,"nama"=>"informatika","id_jenjang"=>1,"kaprodi"=>"cahya vikasari"]
        );
    }
}
