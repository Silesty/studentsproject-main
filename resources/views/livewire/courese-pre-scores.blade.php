<div @if ($selectedCourseId != $couresId) hidden @endif>
    <a class="btn btn-primary" role="button" wire:click="$emit('changePage',0,'saay')">رجوع</a>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>الطالب</th>
                <th>درجة السعي السنوي</th>

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
                    <td>
                        <input class="form-control" type="number" max='0' min='50'
                            placeholder="درجة السعي السنوي" wire:model="studensDegrees.{{ $key }}.saay_score"
                            tabindex="{{ $index }}">

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
