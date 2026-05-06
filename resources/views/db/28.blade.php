@extends('components.layout')

@section('content')
    <h2>Задание 28: Пользователь с id = 3</h2>
    <p>ID: {{ $user->id }}</p>
    <p>Имя: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <a href="/qb/29">→ Задание 29</a>
@endsection