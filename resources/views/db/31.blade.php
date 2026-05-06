@extends('components.layout')

@section('content')
    <h2>Задание 31: id = 3 И age = 20</h2>
    @if ($user)
        <p>Найден: {{ $user->name }}</p>
    @else
        <p>Пользователь с id=3 и age=20 не найден</p>
    @endif
    <a href="/qb/32">→ Задание 32</a>
@endsection