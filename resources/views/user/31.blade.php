@extends('layout')

@section('content')
    <ul>
        @foreach ($items as $item)
            <li>{{ $loop->iteration }}: {{ $item }}</li>
        @endforeach
    </ul>
@endsection