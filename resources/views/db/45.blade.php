@extends('components.layout')

@section('content')
    <h2>Задание 45: 10 пользователей, начиная с 5-го</h2>
    <table border="1">
        <thead><tr><th>ID</th><th>Имя</th><th>Email</th></tr></thead>
        <tbody>
            @foreach ($users as $user)
            <tr><td>{{ $user->id }}</td><td>{{ $user->name }}</td><td>{{ $user->email }}</td></tr>
            @endforeach
        </tbody>
    \endtable
    <a href="/qb/46">→ Задание 46</a>
@endsection