@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <livewire:exams :stage_id="$stage_id" />
        </div>
    </div>
@endsection
