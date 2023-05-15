@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <livewire:stages :stage_id="$stage_id" />
        </div>
    </div>
@endsection
