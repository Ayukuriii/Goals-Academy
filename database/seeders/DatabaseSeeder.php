<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\OngoingProgram;
use App\Models\PaymentStatus;
use App\Models\ProgramService;
use App\Models\ProgramSession;
use App\Models\Tutor;
use App\Models\TutorNotes;
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

        Tutor::create([
            'name'  => 'Hilda'
        ]);
        Tutor::create([
            'name'  => 'Herinda'
        ]);

        PaymentStatus::create([
            'status' => 'success'
        ]);
        PaymentStatus::create([
            'status' => 'pending'
        ]);
        PaymentStatus::create([
            'status' => 'failed'
        ]);

        OngoingProgram::create([
            'user_id' => 1,
            'program_services_id' => 1,
            'tutor_id' => 1,
            'payment_status_id' => 1,
            'program_session_id' => 1,
            'date' => now()
        ]);

        TutorNotes::create([
            'ongoing_programs_id' => 1,
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor rem incidunt nostrum reiciendis soluta alias labore nemo dignissimos itaque atque quibusdam id, animi sit quidem iste est molestiae libero perferendis blanditiis distinctio expedita veniam hic. Corrupti ipsam nam nesciunt veniam, doloremque totam quasi reiciendis, sunt ad officiis, dolor libero? Voluptas, est quisquam officiis incidunt facere, neque beatae, illum sed cupiditate adipisci iusto iure ipsum. Dolore natus deleniti asperiores adipisci! Deleniti saepe doloremque suscipit molestiae quas magnam repudiandae cumque eos laborum distinctio sunt modi, nam natus quae? Accusantium, optio tenetur, error reiciendis inventore eos sapiente ipsum quidem necessitatibus expedita molestiae earum!'
        ]);

        ProgramSession::create([
            'sesi' => '09:30'
        ]);
        ProgramSession::create([
            'sesi' => '10:10'
        ]);
        ProgramSession::create([
            'sesi' => '11:20'
        ]);
        ProgramSession::create([
            'sesi' => '12:30'
        ]);
    }
}
