@extends('components.layout')

@section('content')
    <h2>Задание 41: Один случайный пользователь</h2>
    <p>ID: {{ $user->id }}</p>
    <p>Имя: {{ $user->name }}</p>
    <p>Email: {{ $user->email }}</p>
    <a href="/qb/42">→ Задание 42</a>
@endsection