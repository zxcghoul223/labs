@extends('components.layout')

@section('content')
    <h2>Задание 22: Коллекция имён всех пользователей</h2>
    <ul>
        @foreach ($names as $name)
            <li>{{ $name }}</li>
        @endforeach
    </ul>
    <a href="/qb/23">→ Задание 23</a>
@endsection