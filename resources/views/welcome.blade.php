<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ 'نظام الاقسام' }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="menu">
        <!-- contain all menu -->
        <div id="logo">Home</div>
        <ul>
            <li><a class="menu-item" href="{{ route('login') }}">Log in</a></li>
            <li><a class="menu-item" href="statistic.html">Statistic</a></li>
        </ul>
    </nav>

    <img src={{ asset('assets/img/mosul.png') }} style="float: left" />
    <br />
    <br /><br /><br />
    <h1 dir="rtl">
        <b><big>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbspجامعة
                الموصل
            </big></b>
    </h1>
    <br />
    <h1 dir="rtl">
        <b><big>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp كلية التربية للعلوم الصرفة
            </big></b>
    </h1>
    <br />
    <h1 dir="rtl">
        <b><big>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp قسم
                الحاسبات
            </big></b>
    </h1>
    <br />
    <h1 dir="rtl">
        <b><big>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp بناء برمجيات لإدارة شؤون الطلبة
            </big></b>
    </h1>
    <br />
    <h1 dir="rtl">
        <b><big>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp اعداد
                الطلاب
            </big></b>
    </h1>
    <br />
    <h1 dir="rtl">
        <b><big>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp سلستي مايكل جوزيف
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp بان بديع اسحق
            </big></b>
    </h1>
    <br />
    <h1 dir="rtl">
        <b><big>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp عباس قاسم عباس
            </big></b>
    </h1>
    <br />
    <h1 dir="rtl">
        <b><big>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp بإشراف
            </big></b>
    </h1>
    <br />
    <h1 dir="rtl">
        <b><big>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp أ.م.د الاء ياسين طاقة
            </big></b>
    </h1>
    <br />
</body>

</html>
