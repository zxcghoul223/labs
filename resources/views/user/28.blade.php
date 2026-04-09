@extends('layout')

@section('content')
    <table border="1">
        <tr><th>Имя</th><th>Фамилия</th><th>Зарплата</th></tr>
        @foreach ($employees as $emp)
        <tr>
            <td>{{ $emp['name'] }}</td>
            <td>{{ $emp['surname'] }}</td>
            <td>{{ $emp['salary'] }}</td>
        </tr>
        @endforeach
    </table>
@endsection