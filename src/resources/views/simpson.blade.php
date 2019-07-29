@extends('base')


@section('content')
<div>
    <ul>
        @foreach ($categories as $category)
            <a href="{{ '/simpson/' . $category['id'] }}">
                <h3>{{ $category['name'] }} <small>(id {{ $category['id'] }})</small></h3>
                <img src="{{ $category['image'] }}" alt="{{ $category['image'] }}" width="250" height="188">
                <p>{{ $category['description'] }}</p>
                <hr/>
            </a>
        @endforeach
    </ul>
</div>
@endsection
