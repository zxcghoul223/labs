@extends('layout')

@section('content')
    @if ($age > 18)
        <p>Вы совершеннолетний</p>
    @else
        <p>Вы несовершеннолетний</p>
    @endif
@endsection