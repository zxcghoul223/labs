@extends('layout')

@section('content')
    <p>С тегами: {!! $str !!}</p>
    <p>Без тегов (экранировано): {{ $str }}</p>
@endsection