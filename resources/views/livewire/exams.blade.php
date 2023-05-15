<div>
    <div @if ($currentPage != 0) hidden @endif class="tab-content">
        <div class="tab-pane  show active" role="tabpanel" aria-labelledby="home-tab">
            <table class="table table-striped table-inverse table-responsive ">
                <thead class="thead-inverse">
                    <tr>
                        <th>#</th>
                        <th>المادة</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $index = 1;
                    @endphp
                    @foreach ($activeCourses as $course_item)
                        <tr>
                            <td> {{ $index++ }}</td>
                            <td> {{ $course_item->arabic_name }}</td>
                            <td> <a class="btn btn-info" role="button"
                                    wire:click="changePage({{ $course_item->id }},'saay')">
                                    السعي</a></td>
                            <td> <a class="btn btn-info" role="button"
                                    wire:click="changePage({{ $course_item->id }},'first_attempt')">الدور الاول</a>
                            </td>
                            <td> <a class="btn btn-info" role="button"
                                    wire:click="changePage({{ $course_item->id }},'second_attempt')">الدور الثاني</a>
                            </td>
                            <td> <a class="btn btn-info" role="button">الموقف النهائي</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    @foreach ($activeCourses as $course_item)
        <livewire:courese-pre-scores :courseId="$course_item->id" :wire:key="'courese-pre-scores'.$course_item->id" />
        <livewire:first-attempt-scores :courseId="$course_item->id" :wire:key="'first-attempt-scores'.$course_item->id" />
        <livewire:second-attempt-scores :courseId="$course_item->id" :wire:key="'second-attempt-scores'.$course_item->id" />
    @endforeach
</div>
