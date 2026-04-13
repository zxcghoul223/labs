@extends('layout')

@section('content')
    <style>
        .first { color: green; font-weight: bold; }
        .last  { color: red;  font-weight: bold; }
    </style>
    <ul>
        @foreach ($items as $item)
            <li class="@if($loop->first) first @endif @if($loop->last) last @endif">
                {{ $loop->iteration }}: {{ $item }}
            </li>
        @endforeach
    </ul>
@endsection