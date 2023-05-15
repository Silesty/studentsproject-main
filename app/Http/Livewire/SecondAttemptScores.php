<?php

namespace App\Http\Livewire;

use App\Models\AcademicYears;
use App\Models\StudentEnroleCourse;
use Livewire\Component;

class SecondAttemptScores extends Component
{
    public $couresId, $selectedCourseId = 0;
    protected $listeners = ['pageChanged' => 'SelectCourseId'];
    public $studensDegrees, $academicYear;
    protected $rules = [
        'studensDegrees.*.second_attempt' => 'required',
    ];
    public function SelectCourseId($couresId, $pageType)
    {
        if ($pageType == 'second_attempt') {

            $this->selectedCourseId = $couresId;
            $this->render();
        }
    }
    public function render()
    {
        $this->studensDegrees = StudentEnroleCourse::select('student_enrole_courses.*')
            ->join('students', 'students.id', '=', 'student_enrole_courses.student_id')
            ->where('course_id', '=', $this->couresId)
            ->where('academic_year_id', '=', $this->academicYear->id)
            ->where('final_degree', '<', 50)
            ->where('is_second_attempt', '=', 1)
            ->orderBy('students.name')
            ->get();
        return view('livewire.second-attempt-scores');
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
        $this->studensDegrees[$index]->final_degree =
            $this->studensDegrees[$index]->saay_score
            + $this->studensDegrees[$index]->second_attempt
            + $this->studensDegrees[$index]->extra_score;
        if ($this->studensDegrees[$index]->final_degree >= 50) {
            $this->studensDegrees[$index]->is_passed = 1;
        }
        $this->studensDegrees[$index]->save();
    }
}
