<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'gender',
        'birth_date',
        'gov',
        'address',
        'study_type',
        'acceptance_year',
        'is_parallel',
    ];
    /**
     * Get the currentEnrolment associated with the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function currentEnrolment()
    {
        return $this->hasOne(StudentEnroleStage::class, 'student_id', 'id')->where('academic_year_id', AcademicYears::where('is_active', '1')->first()->id);
    }
}
