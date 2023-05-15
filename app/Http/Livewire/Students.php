<?php

namespace App\Http\Livewire;

use App\Models\AcademicYears;
use App\Models\Student;
use Livewire\Component;

class Students extends Component
{
    public $academicYear, $newStudent, $SearchOption, $StudentsList;
    protected $rules = [
        'newStudent.name' => 'required',
        'newStudent.gender' => 'required',
        'newStudent.birth_date' => 'required',
        'newStudent.gov' => 'required',
        'newStudent.address' => 'required',
        'newStudent.study_type' => 'required',
        'newStudent.is_parallel' => '',
        'SearchOption' => ''
        //'newStudent.acceptance_year' => 'required',
    ];
    public function render()
    {
        $this->StudentsList = Student::where('status', $this->SearchOption)->get();

        return view('livewire.students');
    }
    public function mount()
    {
        $this->academicYear = AcademicYears::where('is_active', 1)->first();
        $this->newStudent = new Student();
        $this->newStudent->is_parallel = 0;

        $this->SearchOption = 1;
        $this->StudentsList = Student::where('status', $this->SearchOption)->get();
    }
    public function saveStudent()
    {
        $this->validate();
        $this->newStudent->acceptance_year = $this->academicYear->id;

        $this->newStudent->save();

        $this->newStudent = new Student();
        $this->newStudent->is_parallel = 0;
    }
    public function selectStudent($student_id)
    {
        $this->newStudent = Student::find($student_id);
    }
    public function updated($propertyName)
    {
        if ($propertyName == 'SearchOption') {
            $this->StudentsList = Student::where('status', $this->SearchOption)->get();
        }
    }
}
