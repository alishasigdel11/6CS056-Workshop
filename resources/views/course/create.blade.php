<!DOCTYPE html>
<html>

<head>
    <title>Create Course</title>
</head>

<body>

    <h1>Create Course</h1>

    @if($errors->any())
        <div>
            <h3>Please fix the following errors:</h3>

            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/courses" method="POST">

        @csrf

        <div>
            <label for="name">Course Name</label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
            >
        </div>

        <br>

        <div>
            <label for="description">Description</label>

            <textarea
                id="description"
                name="description"
            >{{ old('description') }}</textarea>
        </div>

        <br>

        <div>
            <label for="duration">Duration</label>

            <input
                type="text"
                id="duration"
                name="duration"
                value="{{ old('duration') }}"
            >
        </div>

        <br>

        <div>
            <label for="fee">Fee</label>

            <input
                type="number"
                id="fee"
                name="fee"
                step="0.01"
                value="{{ old('fee') }}"
            >
        </div>

        <br>

        <button type="submit">
            Create Course
        </button>

    </form>

    <br>

    <a href="/courses">
        Back to Courses
    </a>

</body>

</html>