@extends('layouts.base')

@section('pageTitle', $comic['title'])

@section('content')
    
<div class="container">
    <h1>{{$comic['title']}}</h1>
    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
    <div class="info">
        {{$comic['title']}}
        {{$comic['description']}}
        {{$comic['price']}}
        {{$comic['series']}}
        {{$comic['sale_date']}}
        {{$comic['type']}}
    </div>
    <a href="{{route('comic.index')}}">Torna indietro</a>
</div>

@endsection