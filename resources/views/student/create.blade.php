@extends('layouts.app')

@section('title', 'Create Student')

@section('content')

    <h1>Create Student</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Name</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
            >
        </div>

        <br>

        <div>
            <label for="email">Email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
            >
        </div>

        <br>

        <div>
            <label for="phone">Phone</label>
            <input
                type="text"
                id="phone"
                name="phone"
                value="{{ old('phone') }}"
            >
        </div>

        <br>

        <div>
            <label for="address">Address</label>
            <textarea
                id="address"
                name="address"
            >{{ old('address') }}</textarea>
        </div>

        <br>

        <div>
            <label for="date_of_birth">Date of Birth</label>
            <input
                type="date"
                id="date_of_birth"
                name="date_of_birth"
                value="{{ old('date_of_birth') }}"
            >
        </div>

        <br>

        <button type="submit">
            Create Student
        </button>

    </form>

    <br>

    <a href="{{ route('students.index') }}">
        Back to Students
    </a>

@endsection