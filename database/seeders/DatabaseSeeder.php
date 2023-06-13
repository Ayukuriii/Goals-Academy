<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ProgramService;
use App\Models\User;
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

        User::create([
            'name'  => 'Ekadian Haris',
            'email' => 'ekadianharis@gmail.com',
            'phone_number'  => '087763420873',
            'university'    => 'Politeknik Negeri Malang',
            'major' => 'Teknik Elektronika',
            'password'      => bcrypt('qwe12334')
        ]);
        
        ProgramService::create([
            'title' => 'Dibimbing Online',
            'description' => 'Bimbingan skripsi untuk mahasiswa tingkat akhir yang dilaksanakan secara online, durasi 30 menit.',
            'price' => '47000'
        ]);
        ProgramService::create([
            'title' => 'Dibimbing Online Premium',
            'description' => 'Bimbingan skripsi untuk mahasiswa tingkat akhir yang dilaksanakan secara online, durasi 45 menit.',
            'price' => '85000'
        ]);
        ProgramService::create([
            'title' => 'Dibimbing Offline',
            'description' => 'Bimbingan skripsi untuk mahasiswa tingkat akhir yang dilaksanakan secara offline, durasi 60 menit.',
            'price' => '98000'
        ]);
    }
}
