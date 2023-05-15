<?php

namespace Database\Seeders;

use App\Models\AcademicYears;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicYearsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $startat = 1990;
        $endat = 2023;
        for ($i = $startat; $i < $endat; $i++) {
            AcademicYears::create(
                [
                    'start_year' => $i,
                    'end_year' => $i + 1,
                    'is_active' => ($endat == $i + 1 ? true : false)
                ]
            );
        }
    }
}
