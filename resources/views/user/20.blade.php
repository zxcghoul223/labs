@extends('layout')

@section('content')
    <ul>
        @foreach ($numbers as $num)
            <li>{{ $num }}² = {{ $num * $num }}</li>
        @endforeach
    </ul>
@endsection