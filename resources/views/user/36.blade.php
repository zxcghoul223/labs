@extends('layout')

@section('content')
    @for ($i = 1; $i <= 10; $i++)
        <p>Абзац №{{ $i }} с числом {{ $i }}</p>
    @endfor
@endsection