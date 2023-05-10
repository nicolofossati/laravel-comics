@extends('layouts.app')

@section('page-title', 'Comics')

@section('content')
    <div class="comics-container">
        <h1>BUY</h1>
        <div class="thumb-container">
            @foreach ($data as $comic)
                <div class="thumb-wrapper">
                    <img src="{{$comic['thumb']}}" alt="...">
                    <h3>{{$comic['price']}}</h3>
                </div>
            @endforeach
        </div>
    </div>
@endsection