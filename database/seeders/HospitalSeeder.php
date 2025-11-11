<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hospital;

class HospitalSeeder extends Seeder
{
    public function run(): void
    {
        Hospital::insert([
            [
                'nama'   => 'RS Mayapada',
                'alamat' => 'Jl. Sudirman, Bandung',
                'email'  => 'mayapada@rs.com',
                'telepon' => '000-123456'
            ],
            [
                'nama'   => 'RS Sardjito',
                'alamat' => 'Jl. Kesehatan, Yogyakarta',
                'email'  => 'sardjito@rs.com',
                'telepon' => '0000-987654'
            ]
        ]);
    }
}
