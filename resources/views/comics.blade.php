@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
    <h1>Current Comics</h1>
    <div>
        @foreach ($data as $comic)
            <img src="{{$comic['thumb']}}" alt="...">
        @endforeach
    </div>
@endsection
