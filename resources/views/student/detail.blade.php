@extends('layouts.app')

@section('title', 'Student Details')

@section('content')

    <h1>Student Details</h1>

    <p>
        <strong>ID:</strong>
        {{ $student->id }}
    </p>

    <p>
        <strong>Name:</strong>
        {{ $student->name }}
    </p>

    <p>
        <strong>Email:</strong>
        {{ $student->email }}
    </p>

    <p>
        <strong>Phone:</strong>
        {{ $student->phone }}
    </p>

    <p>
        <strong>Address:</strong>
        {{ $student->address }}
    </p>

    <p>
        <strong>Date of Birth:</strong>
        {{ $student->date_of_birth?->format('Y-m-d') }}
    </p>

    <p>
        <strong>Age:</strong>
        {{ $student->age ?? 'N/A' }}
    </p>

    <a href="{{ route('students.edit', $student->id) }}">
        Edit Student
    </a>

    <br>

    <a href="{{ route('students.index') }}">
        Back to Students
    </a>

@endsection