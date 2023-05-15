<?php

namespace Database\Seeders;

use App\Models\Courses;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courseArray = [
            ['arabic_name' => 'عربي', 'english_name' => '', 'credit' => '1', 'type' => 'T', 'stage_id' => '1',],
            ['arabic_name' => 'تصميم منطقي', 'english_name' => '', 'credit' => '3', 'type' => 'M', 'stage_id' => '1',],
            ['arabic_name' => 'برمجة', 'english_name' => '', 'credit' => '3', 'type' => 'M', 'stage_id' => '1',],
            ['arabic_name' => 'ريضيات', 'english_name' => '', 'credit' => '2', 'type' => 'T', 'stage_id' => '1',],
            ['arabic_name' => 'تركيب', 'english_name' => '', 'credit' => '2', 'type' => 'T', 'stage_id' => '1',],
            ['arabic_name' => 'هياكل متقطعة', 'english_name' => '', 'credit' => '3', 'type' => 'M', 'stage_id' => '1',],
            ['arabic_name' => 'اسس تربية', 'english_name' => '', 'credit' => '1', 'type' => 'T', 'stage_id' => '1',],
            ['arabic_name' => 'حقوق انسان', 'english_name' => '', 'credit' => '1', 'type' => 'T', 'stage_id' => '1',],
            ['arabic_name' => 'علم نفس', 'english_name' => '', 'credit' => '1', 'type' => 'T', 'stage_id' => '1',],
        ];
        foreach ($courseArray as $courseItem) {
            Courses::create($courseItem);
        }
        //$coures->name
    }
}
