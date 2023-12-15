<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::insert(
            ["id"=>1,"nama"=>"yanuar prayoga","id_kelas"=>1,"nim"=>220302072],
            ["id"=>2,"nama"=>"raditya anggraito a","id_kelas","id_kelas"=>1,"nim"=>220302069],
        );
    }
}
