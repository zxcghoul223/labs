@extends('components.layout')

@section('content')
    <h2>Задание 42: Возраст от 20 до 30, случайная сортировка</h2>
    <h3>Все пользователи:</h3>
    <table border="1">
        <thead><tr><th>ID</th><th>Имя</th><th>Возраст</th></tr></thead>
        <tbody>
            @foreach ($users as $user)
            <tr><td>{{ $user->id }}</td><td>{{ $user->name }}</td><td>{{ $user->age }}</td></tr>
            @endforeach
        </tbody>
    \endtable
    <h3>Один случайный:</h3>
    <p>{{ $randomUser->name }} - {{ $randomUser->age }} лет</p>
    <a href="/qb/43">→ Задание 43</a>
@endsection