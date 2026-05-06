@extends('components.layout')

@section('content')
    <h2>Задание 18: Пользователь с id = 3</h2>
    <p><strong>ID:</strong> {{ $user->id }}</p>
    <p><strong>Имя:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Возраст:</strong> {{ $user->age ?? '-' }}</p>
    <a href="/qb/19">→ Задание 19</a>
@endsection