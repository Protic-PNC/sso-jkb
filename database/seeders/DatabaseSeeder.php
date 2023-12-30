<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dosen;
use App\Models\HasARole;
use App\Models\Jenjang;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\Prodi;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Jenjang::truncate();
        // Prodi::truncate();
        // Dosen::truncate();
        // Role::truncate();
        // Kelas::truncate();
        // Mahasiswa::truncate();
        // HasARole::truncate();
        $this->call(JenjangSeeder::class);
        $this->call(ProdiSeeder::class);
        $this->call(DosenSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(MahasiswaSeeder::class);
        $this->call(HasARoleSeeder::class);

    }
}
