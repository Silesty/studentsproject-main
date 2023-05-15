<div>
    <div class="card">
        <div class="card-header">
            <div class="form-group">
                <label>حالة الطلبة</label>
                <select class="form-control" wire:model="SearchOption">
                    <option value="1">المستمرين</option>
                    <option value="2">الخريجين</option>
                    <option value="3">المرقنة قيودهم</option>
                </select>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">الطلبة</h5>
            <div class="col-sm-12">

                <table class="table table-responsive-sm table-striped-columns">
                    <thead>
                        <th>#</th>
                        <th>الاسم الكامل</th>
                        <th>النوع</th>
                        <th>تاريخ التولد</th>
                        <th>محافظة السكن</th>
                        <th>عنوان السكن</th>
                        <th>نوع الدراسة</th>
                        <th>موازي؟</th>
                        <th></th>
                    </thead>
                    <tbody>

                        @foreach ($StudentsList as $key => $Student_item)
                            @if ($Student_item->id != $newStudent->id)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{ $Student_item->name }}</td>
                                    <td>{{ $Student_item->gender }}</td>
                                    <td>{{ $Student_item->birth_date }}</td>
                                    <td>{{ $Student_item->gov }}</td>
                                    <td>{{ $Student_item->address }}</td>
                                    <td>{{ $Student_item->study_type }}</td>
                                    <td>{{ $Student_item->is_parallel }}</td>
                                    <td><a class="btn btn-success" role="button"
                                            wire:click="selectStudent({{ $Student_item->id }})">تعديل</a></td>
                                </tr>
                            @else
                                <tr>
                                    <td></td>
                                    <td><input type="text" class="form-control" wire:model="newStudent.name"></td>
                                    <td><select class="form-select-sm" wire:model="newStudent.gender">
                                            <option value="" hidden>اختر</option>
                                            <option value="male">ذكر</option>
                                            <option value="female">انثى</option>
                                        </select></td>
                                    <td><input type="date" class="form-control" wire:model="newStudent.birth_date">
                                    </td>
                                    <td><select class="form-select-sm" wire:model="newStudent.gov">
                                            <option value="" hidden>اختر</option>
                                            <option value="الأنبار">الأنبار</option>
                                            <option value="بابل">بابل</option>
                                            <option value="بغداد">بغداد</option>
                                            <option value="البصرة">البصرة</option>
                                            <option value="ذي قار">ذي قار</option>
                                            <option value="ديالى">ديالى</option>
                                            <option value="دهوك">دهوك</option>
                                            <option value="أربيل">أربيل</option>
                                            <option value="كربلاء">كربلاء</option>
                                            <option value="كركوك">كركوك</option>
                                            <option value="ميسان">ميسان</option>
                                            <option value="المثنى">المثنى</option>
                                            <option value="النجف">النجف</option>
                                            <option value="نينوى">نينوى</option>
                                            <option value="القادسية">القادسية</option>
                                            <option value="صلاح الدين">صلاح الدين</option>
                                            <option value="السليمانية">السليمانية</option>
                                            <option value="واسط">واسط</option>
                                        </select></td>
                                    <td>
                                        <textarea cols="75" rows="2" class="form-text" wire:model="newStudent.address"></textarea>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <select class="form-control" wire:model="newStudent.study_type">
                                                <option value="" hidden>اختر</option>
                                                <option value="m">صباحي</option>
                                                <option value="e">مسائي</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input"
                                                wire:model="newStudent.is_parallel">
                                        </div>
                                    </td>
                                    <td><a class="btn btn-warning" role="button" wire:click="saveStudent">حفظ</a></td>

                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                    <tfoot>
                        @if ($SearchOption == 1 && $newStudent->id == null)
                            <tr>
                                <td>#</td>
                                <td><input type="text" class="form-control" wire:model="newStudent.name"></td>
                                <td><select class="form-select-sm" wire:model="newStudent.gender">
                                        <option value="" hidden>اختر</option>
                                        <option value="male">ذكر</option>
                                        <option value="female">انثى</option>
                                    </select></td>
                                <td><input type="date" class="form-control" wire:model="newStudent.birth_date"></td>
                                <td><select class="form-select-sm" wire:model="newStudent.gov">
                                        <option value="" hidden>اختر</option>
                                        <option value="الأنبار">الأنبار</option>
                                        <option value="بابل">بابل</option>
                                        <option value="بغداد">بغداد</option>
                                        <option value="البصرة">البصرة</option>
                                        <option value="ذي قار">ذي قار</option>
                                        <option value="ديالى">ديالى</option>
                                        <option value="دهوك">دهوك</option>
                                        <option value="أربيل">أربيل</option>
                                        <option value="كربلاء">كربلاء</option>
                                        <option value="كركوك">كركوك</option>
                                        <option value="ميسان">ميسان</option>
                                        <option value="المثنى">المثنى</option>
                                        <option value="النجف">النجف</option>
                                        <option value="نينوى">نينوى</option>
                                        <option value="القادسية">القادسية</option>
                                        <option value="صلاح الدين">صلاح الدين</option>
                                        <option value="السليمانية">السليمانية</option>
                                        <option value="واسط">واسط</option>
                                    </select></td>
                                <td>
                                    <textarea cols="75" rows="2" class="form-text" wire:model="newStudent.address"></textarea>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <select class="form-control" wire:model="newStudent.study_type">
                                            <option value="" hidden>اختر</option>
                                            <option value="m">صباحي</option>
                                            <option value="e">مسائي</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input"
                                            wire:model="newStudent.is_parallel">
                                    </div>
                                </td>
                                <td><a class="btn btn-warning" role="button" wire:click="saveStudent">اضافة</a></td>

                            </tr>
                        @endif
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="card-footer">
            Footer
        </div>
    </div>
</div>
