@extends('layouts.app')

@section('title', 'Edit Course')

@section('content')

    <h1>Edit Course</h1>

    <form
        action="{{ route('courses.update', $course->id) }}"
        method="POST"
    >
        @csrf
        @method('PUT')

        <div>
            <label for="name">Course Name</label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $course->name) }}"
            >
        </div>

        <br>

        <div>
            <label for="description">Description</label>

            <textarea
                id="description"
                name="description"
            >{{ old('description', $course->description) }}</textarea>
        </div>

        <br>

        <div>
            <label for="duration">Duration</label>

            <input
                type="number"
                id="duration"
                name="duration"
                min="1"
                value="{{ old('duration', $course->duration) }}"
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
                min="0"
                value="{{ old('fee', $course->fee) }}"
            >
        </div>

        <br>

        <div>
            <label for="difficulty">Difficulty</label>

            <select id="difficulty" name="difficulty">
                <option value="Easy" {{ old('difficulty', $course->difficulty) == 'Easy' ? 'selected' : '' }}>
                    Easy
                </option>
                <option value="Medium" {{ old('difficulty', $course->difficulty) == 'Medium' ? 'selected' : '' }}>
                    Medium
                </option>
                <option value="Hard" {{ old('difficulty', $course->difficulty) == 'Hard' ? 'selected' : '' }}>
                    Hard
                </option>
            </select>
        </div>

        <br>

        <div>
            <label for="is_active">Active</label>

            <select id="is_active" name="is_active">
                <option value="1" {{ old('is_active', $course->is_active) ? 'selected' : '' }}>
                    Yes
                </option>
                <option value="0" {{ !old('is_active', $course->is_active) ? 'selected' : '' }}>
                    No
                </option>
            </select>
        </div>

        <br>

        <button type="submit">
            Update Course
        </button>

    </form>

    <br>

    <a href="{{ route('courses.index') }}">
        Back to Courses
    </a>

@endsection