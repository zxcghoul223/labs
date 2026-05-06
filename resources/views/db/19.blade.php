@extends('components.layout')

@section('content')
    <h2>Задание 19: Передать пользователя в представление</h2>
    <p><strong>Имя:</strong> {{ $user->name }}</p>
    <p><strong>Возраст:</strong> {{ $user->age ?? '-' }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <a href="/qb/20">→ Задание 20</a>
@endsection