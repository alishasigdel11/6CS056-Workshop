<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Training Institute')</title>
</head>

<body>

    <nav>
    <a href="{{ route('students.index') }}">Students</a>
    |
    <a href="{{ route('courses.index') }}">Courses</a>
</nav>

    <hr>

    @include('partials.errors')

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @yield('content')

</body>

</html>