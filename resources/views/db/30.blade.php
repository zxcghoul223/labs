@extends('components.layout')

@section('content')
    <h2>Задание 30: Пользователь с email = 'john@mail.com'</h2>
    @if ($user)
        <p>Найден: {{ $user->name }} - {{ $user->email }}</p>
    @else
        <p>Пользователь с email 'john@mail.com' не найден</p>
    @endif
    <a href="/qb/31">→ Задание 31</a>
@endsection