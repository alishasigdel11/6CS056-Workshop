<!DOCTYPE html>
<html>
<head>
    <title>Contact Details</title>
</head>
<body>

<h1>Contact Details</h1>

<p><strong>Name:</strong> {{ $contact->name }}</p>
<p><strong>Email:</strong> {{ $contact->email }}</p>

<a href="/contacts">Back to Contacts</a>
<a href="/contacts/{{ $contact->id }}/edit">Edit</a>

<form action="/contacts/{{ $contact->id }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

</body>
</html>