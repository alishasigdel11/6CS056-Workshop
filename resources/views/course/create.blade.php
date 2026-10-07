@extends('layouts.app')

@section('title', 'Create Course')

@section('content')

    <h1>Create Course</h1>

    <form action="{{ route('courses.store') }}" method="POST">

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
                type="number"
                id="duration"
                name="duration"
                min="1"
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
                min="0"
                value="{{ old('fee') }}"
            >
        </div>

        <br>

        <div>
            <label for="difficulty">Difficulty</label>

            <select id="difficulty" name="difficulty">
                <option value="">Select Difficulty</option>
                <option value="Easy" {{ old('difficulty') == 'Easy' ? 'selected' : '' }}>
                    Easy
                </option>
                <option value="Medium" {{ old('difficulty') == 'Medium' ? 'selected' : '' }}>
                    Medium
                </option>
                <option value="Hard" {{ old('difficulty') == 'Hard' ? 'selected' : '' }}>
                    Hard
                </option>
            </select>
        </div>

        <br>

        <div>
            <label for="is_active">Active</label>

            <select id="is_active" name="is_active">
                <option value="1" {{ old('is_active', '1') == '1' ? 'selected' : '' }}>
                    Yes
                </option>
                <option value="0" {{ old('is_active') == '0' ? 'selected' : '' }}>
                    No
                </option>
            </select>
        </div>

        <br>

        <button type="submit">
            Create Course
        </button>

    </form>

    <br>

    <a href="{{ route('courses.index') }}">
        Back to Courses
    </a>

@endsection