<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h1>{{ $Stage->name }}</h1>
    <hr><br>
    <div class="table-responsive-sm">
        <table class="table">
            <thead>
                <th>#</th>
                <th class="h3">عنوان المقرر</th>
                <th class="h3">عدد الوحدات</th>
                <th class="h3">نوع المقرر</th>
                <th class="h3">التدريسي</th>
                <th class="h3">حالة المقرر</th>
                <th class="h3"></th>
            </thead>
            <tbody>
                @php
                    $index = 1;
                @endphp
                @foreach ($Courses as $Course_item)
                    @if ($newCourse->id == $Course_item->id)
                        <tr class="table-info">
                            <td>{{ $index++ }}</td>
                            <td><input type="text" wire:model="newCourse.arabic_name"></td>
                            <td><input type="number" wire:model="newCourse.credit"></td>
                            <td><select wire:model="newCourse.type">
                                    <option value="T">نظري</option>
                                    <option value="P">عملي</option>
                                    <option value="M">مختلط</option>
                                </select></td>
                            <td><select wire:model="newCourse.user_id">
                                    @foreach ($users as $user_item)
                                        <option value="{{ $user_item->id }}">{{ $user_item->name }}</option>
                                    @endforeach
                                </select></td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                        wire:model="newCourse.is_active">

                                </div>
                            </td>
                            <td><a class="btn btn-success" role="button" wire:click="saveCourse()">خزن</a></td>
                        </tr>
                    @else
                        <tr class="table-secondary">
                            <td>{{ $index++ }}</td>
                            <td>{{ $Course_item->arabic_name }}</td>
                            <td>{{ $Course_item->credit }}</td>
                            <td>{{ $courseTypeArray[$Course_item->type] }}</td>
                            <td>{{ $Course_item->user_id !== null ? $users->firstWhere('id', $Course_item->user_id)->name : 'لم يتم اضافة التدريسي الى المادة' }}
                            </td>
                            <td>
                                {{ $Course_item->is_active ? 'فعال' : 'متوقف' }}
                            </td>
                            <td><a class="btn btn-warning" role="button"
                                    wire:click="selectCourse({{ $Course_item->id }})">تعديل</a></td>
                        </tr>
                    @endif
                @endforeach
            </tbody>

            <tfoot class="table-warning">

                @if ($newCourse->id == null)
                    <tr class="table-info">
                        <td></td>
                        <td><input type="text" wire:model="newCourse.arabic_name"></td>
                        <td><input type="number" wire:model="newCourse.credit"></td>
                        <td><select wire:model="newCourse.type">
                                <option value="T">نظري</option>
                                <option value="P">عملي</option>
                                <option value="M">مختلط</option>
                            </select></td>
                        <td><select wire:model="newCourse.user_id">
                                @foreach ($users as $user_item)
                                    <option value="{{ $user_item->id }}">{{ $user_item->name }}</option>
                                @endforeach
                            </select></td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                    wire:model="newCourse.is_active">

                            </div>
                        </td>
                        <td><a class="btn btn-success" role="button" wire:click="saveCourse()">اضافة</a></td>
                    </tr>

                @endif
            </tfoot>
        </table>
    </div>
</div>
