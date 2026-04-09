@extends('layout')

@section('content')
    @foreach ($numbers as $num)
        {{ $num }}
        @if ($num == 0) @break @endif
    @endforeach
@endsection