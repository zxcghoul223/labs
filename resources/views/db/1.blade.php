@extends('components.layout')

@section('content')
    <h2>Задание 1: Все записи из таблицы users</h2>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Email</th>
                <th>Возраст</th>
                <th>Зарплата</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            </tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->age ?? '-' }}</td>
                <td>{{ $user->salary ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    \d2T
    
    <a href="/qb/2">→ Задание 2</a>
@endsection