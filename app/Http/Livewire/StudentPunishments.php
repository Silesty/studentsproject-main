<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentPunishments extends Component
{
    public $searchInput = '', $searchResults = [];
    protected $rules = [
        'searchInput' => '',
    ];
    public function render()
    {
        if ($this->searchInput != 'id') {
            $this->searchResults = Student::where('name', 'like', '%' . $this->searchInput . '%')->get();
        } else {
            $this->searchResults = [];
        }
        return view('livewire.student-punishments');
    }
    public function dismissstudent($student_id)
    {
        $student = Student::find($student_id);
        $student->is_dissmised = 1;
        $student->save();
    }
    public function undismissstudent($student_id)
    {
        $student = Student::find($student_id);
        $student->is_dissmised = 0;
        $student->save();
    }
}
