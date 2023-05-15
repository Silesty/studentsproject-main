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
                        <th colspan="3">الاجراء</th>
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
                            @isset($student_item->currentEnrolment)
                                <td>{{ $student_item->currentEnrolment->status }}</td>
                                <td colspan="3"><a class="btn btn-danger" role="button"
                                        wire:click="unenroleStudent({{ $student_item->currentEnrolment->id }})">الغاء</a>
                                </td>
                            @else
                                <td>غير مباشر</td>
                                <td><a class="btn btn-primary" role="button"
                                        wire:click="enroleStudent({{ $student_item->id }},'مستمر')">مباشرة</a></td>
                                <td><a class="btn btn-warning" role="button"
                                        wire:click="enroleStudent({{ $student_item->id }},'مؤجل')">تاجيل السنة</a></td>
                                <td><a class="btn btn-danger" role="button"
                                        wire:click="enroleStudent({{ $student_item->id }},'راسب بالغياب')">راسب بالغياب</a>
                                </td>
                            @endisset
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>

    </div>
</div>
