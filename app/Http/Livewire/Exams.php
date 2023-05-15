<?php

namespace App\Http\Livewire;

use App\Models\AcademicYears;
use App\Models\Courses;
use App\Models\Stages;
use App\Models\StudentEnroleCourse;
use Livewire\Component;

class Exams extends Component
{
    public $Stage, $activeAcademicYear;
    public $studentCoursesEnrolments, $activeCourses, $selectedCouresId;
    public $currentPage = 0;
    protected $listeners = ['changePage'];

    public function render()
    {
        return view('livewire.exams');
    }
    public function mount($stage_id)
    {
        $this->Stage = Stages::find($stage_id);
        $this->activeCourses = $this->Stage->activeCourses->sortBy('id');
        $this->activeAcademicYear = AcademicYears::where('is_active', 1)->first();
    }
    public function changePage($page_id, $type)
    {
        $this->currentPage = $page_id;
        $this->selectedCouresId = $page_id;
        $this->emit('pageChanged', $page_id, $type);
    }
}
