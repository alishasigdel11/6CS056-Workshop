<!DOCTYPE html>
<html>

<head>
    <title>Students</title>
</head>

<body>

    <h1>Students</h1>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

   <a href="/student/create">Create Student</a>

    <table border="1" cellpadding="10">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            @forelse($students as $student)

                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>

                    <td>
                        <a href="/students/{{ $student->id }}">
                            View
                        </a>

                        <a href="/students/{{ $student->id }}/edit">
                            Edit
                        </a>

                        <form
                            action="/students/{{ $student->id }}"
                            method="POST"
                            style="display:inline"
                        >
                            @csrf
                            @method('DELETE')

                            <button type="submit">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>

            @empty

                <tr>
                    <td colspan="5">
                        No students found.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

</body>

</html>