<?php

namespace App\Http\Livewire;

use App\Models\AcademicYears;
use App\Models\Stages;
use App\Models\Student;
use App\Models\StudentEnroleCourse;
use App\Models\StudentEnroleStage;
use Livewire\Component;

class StudentEnrolments extends Component
{
    public $searchInput = '', $searchResults = [];
    protected $rules = [
        'searchInput' => '',
    ];
    public function render()
    {
        if ($this->searchInput != 'id') {
            $this->searchResults = Student::where('name', 'like', '%' . $this->searchInput . '%')->where('is_dissmised', 0)->get();
        } else {
            $this->searchResults = [];
        }

        return view('livewire.student-enrolments');
    }
    public function enroleStudent($student_id, $enrolment_type)
    {
        $academicYear = AcademicYears::where('is_active', 1)->first();

        $student = Student::find($student_id);
        $studentEnrolment = new StudentEnroleStage();
        $studentEnrolment->student_id = $student_id;
        $studentEnrolment->stage_id = $student->current_stage;
        $studentEnrolment->academic_year_id = $academicYear->id;
        $studentEnrolment->status = $enrolment_type;
        $studentEnrolment->save();
        $stage = Stages::find($studentEnrolment->stage_id);
        $activeCourses = $stage->activeCourses;
        foreach ($activeCourses as $activeCourse_item) {
            $studentCourses = new StudentEnroleCourse();
            $studentCourses->student_id = $student_id;
            $studentCourses->course_id = $activeCourse_item->id;
            $studentCourses->academic_year_id = $academicYear->id;
            $studentCourses->credits = $activeCourse_item->credit;
            $studentCourses->save();
        }
    }
    public function unenroleStudent($enrolment_id)
    {
        $enrolment = StudentEnroleStage::find($enrolment_id);
        $studentCourses = StudentEnroleCourse::where('student_id', $enrolment->student_id)
            ->where('academic_year_id', $enrolment->academic_year_id)
            ->get();
        foreach ($studentCourses as $enroledcourse) {
            $enroledcourse->delete();
        }
        $enrolment->delete();
    }
}
