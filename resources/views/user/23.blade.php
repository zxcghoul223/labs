@extends('layout')

@section('content')
    <ul>
        @foreach ($strings as $key => $value)
            <li>Ключ: {{ $key + 1 }}, Значение: {{ $value }}</li>
        @endforeach
    </ul>
@endsection