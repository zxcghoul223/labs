@extends('layout')

@section('content')
    <div class="{{ $cssClass }}">
        Этот блок имеет CSS класс "{{ $cssClass }}"
    </div>
    
    <p class="{{ $cssClass }}">Этот абзац тоже имеет класс "{{ $cssClass }}"</p>
@endsection