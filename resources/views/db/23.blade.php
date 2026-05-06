@extends('components.layout')

@section('content')
    <h2>Задание 23: Передать коллекцию в представление (список)</h2>
    <ul>
        @foreach ($names as $name)
            <li>{{ $name }}</li>
        @endforeach
    </ul>
    <a href="/qb/24">→ Задание 24</a>
@endsection