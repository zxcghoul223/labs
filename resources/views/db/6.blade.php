@extends('components.layout')

@section('content')
    <h2>Задание 6: Только name и email</h2>
    <table border="1">
        <thead><tr><th>Имя</th><th>Email</th></tr></thead>
        <tbody>
            @foreach ($users as $user)
            <tr><td>{{ $user->name }}</td><td>{{ $user->email }}</td></tr>
            @endforeach
        </tbody>
    </table>
    <a href="/qb/7">→ Задание 7</a>
@endsection