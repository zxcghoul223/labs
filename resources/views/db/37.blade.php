@extends('components.layout')

@section('content')
    <h2>Задание 37: Возраст > 30 и сортировка по created_at</h2>
    <table border="1">
        <thead>
            <tr><th>ID</th><th>Имя</th><th>Email</th><th>Возраст</th><th>Создан</th></tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->age ?? '-' }}</td>
                <td>{{ $user->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/qb/38">→ Задание 38</a>
@endsection