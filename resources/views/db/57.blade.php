@extends('components.layout')

@section('content')
    <h2>Задание 57: Пользователи с городами</h2>
    <table border="1">
        <thead>
            <tr><th>ID</th><th>Имя</th><th>Email</th><th>Город</th></tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->city ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/qb/1">→ К началу</a>
@endsection