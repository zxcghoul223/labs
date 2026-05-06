@extends('components.layout')

@section('content')
    <h2>Задание 2: Перебор записей циклом</h2>
    @foreach ($users as $user)
        <p>{{ $user->id }}. {{ $user->name }} - {{ $user->email }}</p>
    @endforeach
    <a href="/qb/3">→ Задание 3</a>
@endsection