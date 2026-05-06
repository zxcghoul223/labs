@extends('components.layout')

@section('content')
    <h2>Задание 33: Сортировка по возрасту (возрастание)</h2>
    <table border="1">
        <thead>
            <tr><th>ID</th><th>Имя</th><th>Email</th><th>Возраст</th><th>Зарплата</th></tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->age ?? '-' }}</td>
                <td>{{ $user->salary ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/qb/34">→ Задание 34</a>
@endsection