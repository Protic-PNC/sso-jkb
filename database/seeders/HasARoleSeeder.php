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
        $has = [
            ["id_dosen" => 1, "id_role" => 1],
            ["id_dosen" => 1, "id_role" => 2]
        ];
        foreach ($has as $j) {
            HasARole::insert(
                $j
            );
        }
    }
}
