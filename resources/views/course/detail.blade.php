<!DOCTYPE html>
<html>

<head>
    <title>Course Details</title>
</head>

<body>

    <h1>Course Details</h1>

    <p>
        <strong>ID:</strong>
        {{ $course->id }}
    </p>

    <p>
        <strong>Name:</strong>
        {{ $course->name }}
    </p>

    <p>
        <strong>Description:</strong>
        {{ $course->description }}
    </p>

    <p>
        <strong>Duration:</strong>
        {{ $course->duration }}
    </p>

    <p>
        <strong>Fee:</strong>
        {{ $course->fee }}
    </p>

    <a href="/courses/{{ $course->id }}/edit">
        Edit Course
    </a>

    <br>

    <a href="/courses">
        Back to Courses
    </a>

</body>

</html>