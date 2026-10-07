@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')

    <h1>Edit Student</h1>

    <form
        action="{{ route('students.update', $student->id) }}"
        method="POST"
    >
        @csrf
        @method('PUT')

        <div>
            <label for="name">Name</label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name', $student->name) }}"
            >
        </div>

        <br>

        <div>
            <label for="email">Email</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email', $student->email) }}"
            >
        </div>

        <br>

        <div>
            <label for="phone">Phone</label>

            <input
                type="text"
                id="phone"
                name="phone"
                value="{{ old('phone', $student->phone) }}"
            >
        </div>

        <br>

        <div>
            <label for="address">Address</label>

            <textarea
                id="address"
                name="address"
            >{{ old('address', $student->address) }}</textarea>
        </div>

        <br>

        <div>
            <label for="date_of_birth">Date of Birth</label>

            <input
                type="date"
                id="date_of_birth"
                name="date_of_birth"
                value="{{ old('date_of_birth', $student->date_of_birth?->format('Y-m-d')) }}"
            >
        </div>

        <br>

        <button type="submit">
            Update Student
        </button>

    </form>

    <br>

    <a href="{{ route('students.index') }}">
        Back to Students
    </a>

@endsection