@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
    <div class="comics-container">
        <h1>Current Comics</h1>
        <div class="thumb-container">
            @foreach ($data as $comic)
                <div class="thumb-wrapper">
                    <img src="{{$comic['thumb']}}" alt="...">
                    <h3>{{$comic['title']}}</h3>
                </div>
            @endforeach
        </div>
    </div>
@endsection
