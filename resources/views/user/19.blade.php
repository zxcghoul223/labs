@extends('layout')

@section('content')
    <ul>
        @foreach ($numbers as $num)
            <li>{{ $num }}</li>
        @endforeach
    </ul>
@endsection