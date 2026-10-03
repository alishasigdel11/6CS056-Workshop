<!DOCTYPE html>
<html>
<head>
    <title>Contacts</title>
</head>
<body>

<h1>Contacts</h1>

<a href="/contacts/create">Create Contact</a>

@if(session('success'))
    <p>{{ session('success') }}</p>
@endif

<ul>
    @foreach($contacts as $contact)
        <li>
            <a href="/contacts/{{ $contact->id }}">
                {{ $contact->name }}
            </a>
            - {{ $contact->email }}
        </li>
    @endforeach
</ul>

</body>
</html>