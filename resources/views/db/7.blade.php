@extends('components.layout')

@section('content')
    <h2>Задание 7: Переименование email → user_email</h2>
    <table border="1">
        <thead><tr><th>Имя</th><th>Email пользователя</th></tr></thead>
        <tbody>
            @foreach ($users as $user)
            <tr><td>{{ $user->name }}</td><td>{{ $user->user_email }}</td></tr>
            @endforeach
        </tbody>
    </table>
    <a href="/qb/8">→ Задание 8</a>
@endsection