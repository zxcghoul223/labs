@extends('layout')

@section('content')
    <ul>
        @foreach ($items as $item)
            <li>{{ $loop->index }}: {{ $item }}</li>
        @endforeach
    </ul>
@endsection