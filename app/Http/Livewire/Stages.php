<?php

namespace App\Http\Livewire;

use App\Models\Courses;
use Livewire\Component;
use App\Models\Stages as StagesModel;
use App\Models\User;

class Stages extends Component
{
    protected $rules =
    [
        'newCourse.arabic_name' => 'required',
        'newCourse.credit' => 'required',
        'newCourse.type' => 'required',
        'newCourse.user_id' => 'required',
        'newCourse.is_active' => 'required',

    ];
    public function render()
    {
        $this->Courses = Courses::where('stage_id', $this->Stage->id)->get();
        return view('livewire.stages');
    }
    public $users;
    public $Stage, $Courses;
    public $newCourse;
    public $courseTypeArray = [
        'T' => 'نظري',
        'P' => 'عملي',
        'M' => 'مختلط',
    ];
    public function mount($stage_id)
    {
        $this->Stage = StagesModel::find($stage_id);
        $this->users = User::all();
        $this->newCourse = new Courses();
    }
    public function saveCourse()
    {
        $this->validate();
        $this->newCourse->english_name = "";
        $this->newCourse->stage_id = $this->Stage->id;
        $this->newCourse->save();
        $this->newCourse = new Courses();
    }
    public function selectCourse($course_id)
    {
        $this->newCourse = Courses::find($course_id);
    }
}
