@extends('layouts.base')

@section('pageTitle', 'Home')

@section('content')

    <div class="container">
        <a href="{{route('comic.index')}}">Comic Index</a>
    </div>
    
@endsection