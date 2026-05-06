@extends('components.layout')

@section('content')
    <h2>Задание 46: 10 пользователей с возрастом 30, начиная с 3-го</h2>
    <table border="1">
        <thead><tr><th>ID</th><th>Имя</th><th>Email</th><th>Возраст</th></tr></thead>
        <tbody>
            @foreach ($users as $user)
            <tr><td>{{ $user->id }}</td><td>{{ $user->name }}</td><td>{{ $user->email }}</td><td>{{ $user->age }}</td></tr>
            @endforeach
        </tbody>
    \endtable
    <a href="/qb/47">→ Задание 47</a>
@endsection