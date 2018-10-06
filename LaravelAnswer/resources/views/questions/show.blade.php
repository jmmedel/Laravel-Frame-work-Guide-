
@extends('layouts.template')
@section('content')

    <hr />
    <hr />
    <hr />
    <h1>{{ $question->title }}</h1>
    <p class="well">
    {{ $question->description }}
    </p>
    <hr />

@endsection
