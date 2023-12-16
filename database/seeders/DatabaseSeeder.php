<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(JenjangSeeder::class);
        $this->call(ProdiSeeder::class);
        $this->call(DosenSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(MahasiswaSeeder::class);
        $this->call(HasARoleSeeder::class);

    }
}
