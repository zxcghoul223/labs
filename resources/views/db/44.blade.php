@extends('components.layout')

@section('content')
    <h2>Задание 44: Первые 3 пользователя с возрастом 30</h2>
    <table border="1">
        <thead><tr><th>ID</th><th>Имя</th><th>Email</th><th>Возраст</th></tr></thead>
        <tbody>
            @foreach ($users as $user)
            <tr><td>{{ $user->id }}</td><td>{{ $user->name }}</td><td>{{ $user->email }}</td><td>{{ $user->age }}</td></tr>
            @endforeach
        </tbody>
    \endtable
    <a href="/qb/45">→ Задание 45</a>
@endsection