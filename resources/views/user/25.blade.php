@extends('layout')

@section('content')
    @if (is_array($data))
        <ul>
            @foreach ($data as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @else
        <p>{{ $data }}</p>
    @endif
@endsection