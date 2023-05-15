<?php

namespace Database\Seeders;

use App\Models\Stages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stage_array = [
            1 => 'المرحلة الاولى',
            2 => 'المرحلة الثانية',
            3 => 'المرحلة الثالثة',
            4 => 'المرحلة الرابعة',
        ];
        foreach ($stage_array as $key => $stage_item) {
            $stage = new Stages();
            $stage->id = $key;
            $stage->name = $stage_item;
            $stage->save();
        }
    }
}
