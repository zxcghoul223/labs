@extends('components.layout')

@section('content')
    <h2>Задание 17: Возраст от 20 до 30 ИЛИ зарплата от 400 до 800</h2>
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
    <a href="/qb/18">→ Задание 18</a>
@endsection