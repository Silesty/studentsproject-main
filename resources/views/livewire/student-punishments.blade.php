<div>
    <div class="card">
        <div class="card-header">
            <div class="form-group">
                <label for="">البحث</label>
                <input type="text" class="form-control" aria-describedby="helpId" placeholder="اسم الطالب الكامل"
                    wire:model="searchInput">
                <small id="helpId" class="form-text text-muted">ادخل اسم الطالب للبحث</small>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>المرحلة</th>
                        <th>الحالة</th>
                        <th>الاجراء</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($searchResults as $student_item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $student_item->name }}</td>
                            <td>{{ $student_item->current_stage }}</td>
                            @if (!$student_item->is_dissmised)
                                <td>مستمر</td>
                                <td><a class="btn btn-danger" role="button"
                                        wire:click="dismissstudent({{ $student_item->id }})">ترقين قيد</a>
                                </td>
                            @else
                                <td>مرقن قيده</td>
                                <td><a class="btn btn-success" role="button"
                                        wire:click="undismissstudent({{ $student_item->id }})">الغاء ترقين قيد</a>
                                </td>
                            @endisset
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>

</div>
</div>
