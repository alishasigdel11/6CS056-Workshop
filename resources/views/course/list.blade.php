@extends('layouts.app')

@section('title', 'Courses')

@section('content')

    <h1>Courses</h1>

    <a href="{{ route('courses.create') }}">Create Course</a>

    <br><br>

    <table border="1" cellpadding="10">

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Duration</th>
                <th>Fee</th>
                <th>Difficulty</th>
                <th>Active</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>

            @forelse($courses as $course)

                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->description }}</td>
                    <td>{{ $course->duration }}</td>
                    <td>{{ $course->fee }}</td>
                    <td>{{ $course->difficulty }}</td>
                    <td>{{ $course->is_active ? 'Yes' : 'No' }}</td>

                    <td>
                        <a href="{{ route('courses.show', $course->id) }}">
                            View
                        </a>

                        <a href="{{ route('courses.edit', $course->id) }}">
                            Edit
                        </a>

                        <form
                            action="{{ route('courses.destroy', $course->id) }}"
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
                    <td colspan="8">
                        No courses found.
                    </td>
                </tr>

            @endforelse

        </tbody>

    </table>

@endsection