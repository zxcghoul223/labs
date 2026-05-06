@extends('components.layout')

@section('content')
    <h2>Задание 32: id = 3 ИЛИ age = 20</h2>
    <table border="1">
        <thead>
            <tr><th>ID</th><th>Имя</th><th>Email</th><th>Возраст</th></tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->age ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/qb/33">→ Задание 33</a>
@endsection