@extends('layout')

@section('content')
    <ul>
        @foreach ($numbers as $num)
            @if ($num % 2 == 0)
                <li>{{ $num }}</li>
            @endif
        @endforeach
    </ul>
@endsection