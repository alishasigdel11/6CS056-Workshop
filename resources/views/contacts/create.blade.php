<!DOCTYPE html>
<html>
<head>
    <title>Create Contact</title>
</head>
<body>

<h1>Create Contact</h1>

<form action="/contacts" method="POST">
    @csrf

    <label>Name:</label>
    <input type="text" name="name" value="{{ old('name') }}">
    @error('name')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email') }}">
    @error('email')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    <button type="submit">Save Contact</button>
</form>

<br>

<a href="/contacts">Back to Contacts</a>

</body>
</html>