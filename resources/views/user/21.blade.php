@extends('layout')

@section('content')
    <ul>
        @foreach ($numbers as $num)
            <li>√{{ $num }} = {{ sqrt($num) }}</li>
        @endforeach
    </ul>
@endsection