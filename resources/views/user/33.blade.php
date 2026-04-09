@extends('layout')

@section('content')
    @foreach ($numbers as $num)
        @if ($loop->remaining < 3)
            <i>{{ $num }}</i><br>
        @else
            <b>{{ $num }}</b><br>
        @endif
    @endforeach
@endsection