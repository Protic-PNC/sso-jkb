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
        Kelas::insert(
            ["id"=>1,"nama"=>"1A","id_prodi"=>1],
            ["id"=>2,"nama"=>"1B","id_prodi"=>1],
            ["id"=>3,"nama"=>"1C","id_prodi"=>1],
            ["id"=>4,"nama"=>"2A","id_prodi"=>1],
        );
    }
}
