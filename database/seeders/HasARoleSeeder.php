<?php

namespace Database\Seeders;

use App\Models\HasARole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HasARoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HasARole::insert(
            ["id_dosen"=>1,"id_role"=>1],
            ["id_dosen"=>1,"id_role"=>2],
        );
    }
}
