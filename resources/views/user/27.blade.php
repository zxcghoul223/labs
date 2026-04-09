@extends('layout')

@section('content')
    <ul>
        @foreach ($employees as $emp)
            <li>{{ $emp['name'] }} {{ $emp['surname'] }} – {{ $emp['salary'] }}</li>
        @endforeach
    </ul>
@endsection