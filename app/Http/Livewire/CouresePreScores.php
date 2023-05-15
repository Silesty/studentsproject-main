<?php

namespace App\Http\Livewire;

use App\Models\AcademicYears;
use App\Models\StudentEnroleCourse;
use Livewire\Component;

class CouresePreScores extends Component
{
    public $couresId, $selectedCourseId = 0;
    protected $listeners = ['pageChanged' => 'SelectCourseId'];
    public $studensDegrees, $academicYear;
    protected $rules = [
        'studensDegrees.*.saay_score' => 'required',
    ];
    public function SelectCourseId($couresId, $pageType)
    {
        if ($pageType == 'saay') {

            $this->selectedCourseId = $couresId;
        }
    }
    // do something right here
    public function render()
    {
        $this->studensDegrees = StudentEnroleCourse::select('student_enrole_courses.*')
            ->join('students', 'students.id', '=', 'student_enrole_courses.student_id')
            ->join('student_enrole_stages', 'students.id', '=', 'student_enrole_stages.student_id')
            ->where('course_id', '=', $this->couresId)
            ->where('student_enrole_stages.status', '=', 'مستمر')
            ->where('student_enrole_stages.academic_year_id', '=', $this->academicYear->id)
            ->where('student_enrole_courses.academic_year_id', '=', $this->academicYear->id)
            ->orderBy('students.name')
            ->get();

        return view('livewire.courese-pre-scores');
    }
    public function mount($courseId)
    {
        $this->couresId = $courseId;
        $this->academicYear = AcademicYears::where('is_active', 1)->first();
    }
    public function updated($property)
    {
        $this->validate();
        $index = explode(".", $property)[1];
        $this->studensDegrees[$index]->save();
    }
}
