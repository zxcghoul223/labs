@extends('components.layout')

@section('content')
    <h2>Задание 24: Возраст от 30 до 40 лет</h2>
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
    <a href="/qb/25">→ Задание 25</a>
@endsection