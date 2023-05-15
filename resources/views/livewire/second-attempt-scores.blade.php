<div @if ($selectedCourseId != $couresId) hidden @endif>
    <a class="btn btn-primary" role="button" wire:click="$emit('changePage',0,'second_attempt')">رجوع</a>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>الطالب</th>
                <th>السعي السنوي</th>
                <th>درجة الدور الثاني</th>
                <th>الدرجة النهائية</th>
                <th>الحالة</th>

            </tr>
        </thead>
        <tbody>
            @php
                $index = 1;
            @endphp
            @foreach ($studensDegrees as $key => $studentItem)
                <tr>
                    <td>{{ $index++ }}</td>
                    <td>{{ $studentItem->student->name }}</td>
                    <td>{{ $studentItem->saay_score }}</td>
                    <td>
                        <input class="form-control" type="number" max='0' min='50'
                            placeholder="درجة االدور الثاني" onblur="@this.render()"
                            wire:model.defer="studensDegrees.{{ $key }}.second_attempt"
                            tabindex="{{ $index }}">

                    </td>
                    <td>{{ $studentItem->final_degree }}</td>
                    <td>{{ $studentItem->is_passed ? 'ناجح' : ($studentItem->first_attempt > 0 ? 'راسب' : 'لم يمتحن') }}
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@push('scripts')
    <script type="text/javascript"></script>
@endpush
