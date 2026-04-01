@extends('layout')

@section('content')
    @if ($age > 18)
        <p>Вам {{ $age }} лет. Доступ разрешен!</p>
    @endif
@endsection