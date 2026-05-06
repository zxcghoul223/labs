@extends('layout')

@section('content')
    <ul>
        @foreach ($numbers as $num)
            @continue($num == 0)
            <li>{{ $num }}</li>
        @endforeach
    </ul>
@endsection