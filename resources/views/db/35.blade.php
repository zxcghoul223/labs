@extends('components.layout')

@section('content')
    <h2>Задание 35: Сортировка по created_at (возрастание)</h2>
    <table border="1">
        <thead>
            <tr><th>ID</th><th>Имя</th><th>Email</th><th>Создан</th></tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/qb/36">→ Задание 36</a>
@endsection