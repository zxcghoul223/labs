@extends('components.layout')

@section('content')
    <h2>Задание 29: Пользователь с name = 'john'</h2>
    @if ($user)
        <p>Найден: {{ $user->name }} - {{ $user->email }}</p>
    @else
        <p>Пользователь с именем 'john' не найден</p>
    @endif
    <a href="/qb/30">→ Задание 30</a>
@endsection