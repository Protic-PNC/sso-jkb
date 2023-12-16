<?php

namespace Database\Seeders;

use App\Models\Jenjang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenjang = [
            ["id"=>1,"nama"=>"D3"],
            ["id"=>2,"nama"=>"D4"]
        ];
        foreach($jenjang as $j){
            Jenjang::insert(
                $j
            );
        }
         
    }
}
