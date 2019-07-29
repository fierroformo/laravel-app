@extends('base')


@section('content')
<div>
    <h1>{{ $category['name'] }} <small>(id {{ $category['id'] }})</small></h1>
    <img src="{{ $category['image'] }}" alt="{{ $category['image'] }}">
    <h2>{{ $category['description'] }}</h2>
    <a href="/simpson">Regresar</a>
</div>
@endsection
