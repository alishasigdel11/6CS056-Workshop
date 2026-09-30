<!DOCTYPE html>
<html>

<head>
    <title>Create Student</title>
</head>

<body>

    <h1>Create Student</h1>

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

    <form action="/students" method="POST">
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

    <a href="/students">Back to Students</a>

</body>

</html>