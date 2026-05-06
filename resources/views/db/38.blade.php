@extends('components.layout')

@section('content')
    <h2>Задание 38: Сортировка по updated_at (убывание)</h2>
    <table border="1">
        <thead>
            <tr><th>ID</th><th>Имя</th><th>Email</th><th>Обновлён</th></tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/qb/39">→ Задание 39</a>
@endsection