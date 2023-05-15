@auth

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                @role('chairman')
                    <li class="nav-item mx-2">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                الطلبة
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{ Route('Students') }}">اضافة الطلبة</a></li>
                                <li><a class="dropdown-item" href="{{ Route('StudentsEnrolments') }}">مباشرة الطلاب</a></li>
                                <li><a class="dropdown-item" href="{{ Route('StudentsPunishments') }}">العقوبات الانظباطية</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item  mx-2">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                االمقررات
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                <li><a class="dropdown-item" href="{{ Route('stage_courses', 1) }}">المرحلة الاولى</a></li>
                                <li><a class="dropdown-item" href="{{ Route('stage_courses', 2) }}">المرحلة الثانية</a></li>
                                <li><a class="dropdown-item" href="{{ Route('stage_courses', 3) }}">المرحلة الثالثة</a></li>
                                <li><a class="dropdown-item" href="{{ Route('stage_courses', 4) }}">المرحلة الرابعة</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item  mx-2">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                اللجان الامتحانية
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                <li><a class="dropdown-item" href="{{ Route('exams', 1) }}">المرحلة الاولى</a></li>
                                <li><a class="dropdown-item" href="{{ Route('exams', 2) }}">المرحلة الثانية</a></li>
                                <li><a class="dropdown-item" href="{{ Route('exams', 3) }}">المرحلة الثالثة</a></li>
                                <li><a class="dropdown-item" href="{{ Route('exams', 4) }}">المرحلة الرابعة</a></li>
                            </ul>
                        </div>
                    </li>
                    @endrole
                    <li class="nav-item  mx-2">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                المواد الدراسية
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">انكليزي</a><li>
                                <li><a class="dropdown-item" href="#">oop</a><li>
                                <li><a class="dropdown-item" href="#">قواعد بيانات</a><li>
                            </ul>
                        </div>
                    </li>
            </ul>
        </div>
    </nav>
@endauth
