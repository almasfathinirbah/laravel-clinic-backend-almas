<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
             'name' => 'Admin User',
             'email' => 'almas@fic15.com',
             'role' => 'admin',
             'password' => Hash::make('Adm!n123'),
             'phone' => '12345678',
        ]);

        //seeder profile clinic manual
        \App\Models\ProfileClinic::factory()->create([
            'name' => 'Almas Clinic',
            'address' => 'Jl. Raya Parung No.1',
            'phone' => '12345678',
            'email' => 'almas@fic15.com',
            'doctor_name' => 'Dr. Almas',
            'unique_code' => '123456',
       ]);

       //call
       $this->call(DoctorSeeder::class);
    }
}
