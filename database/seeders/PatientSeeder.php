<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;

class PatientSeeder extends Seeder
{
    public function run(): void
    {
        $patients = [];

        // random patients untuk RS Mayapada (ID = 1)
        for ($i = 1; $i <= 10; $i++) {
            $patients[] = [
                'nama'        => "Pasien Mayapada {$i}",
                'alamat'      => "Alamat Bandung {$i}",
                'telepon'     => "0812" . rand(1000000, 9999999),
                'hospital_id' => 1
            ];
        }

        // random patients untuk RS Sardjito (ID = 2)
        for ($i = 1; $i <= 15; $i++) {
            $patients[] = [
                'nama'        => "Pasien Sardjito {$i}",
                'alamat'      => "Alamat Yogyakarta {$i}",
                'telepon'     => "0851" . rand(1000000, 9999999),
                'hospital_id' => 2
            ];
        }

        Patient::insert($patients);
    }
}
