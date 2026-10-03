<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
</head>
<body>

<h1>Edit Contact</h1>

<form action="/contacts/{{ $contact->id }}" method="POST">
    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name', $contact->name) }}">
    @error('name')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email', $contact->email) }}">
    @error('email')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    <button type="submit">Update Contact</button>
</form>

<br>

<a href="/contacts/{{ $contact->id }}">Back to Contact</a>

</body>
</html>