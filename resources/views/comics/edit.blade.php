@extends('layouts.base')

@section('pageTitle', 'Modifica Fumetto')

@section('content')

    <h1>Modifica fumetto</h1>

    <form method="POST" action="{{ route('comic.update', ['comic' => $comic->id]) }}">
    
        @csrf
        @method('PUT')

        <div class="row">
            <label for="title">Titolo</label>
            <input id="title" type="text" name="title" value="{{old('src', $comic->title)}}">
        </div>

        <div class="row">
            <label for="description">Descrizione</label>
            <textarea id="description" name="description">
                {{old('src', $comic->description)}}
            </textarea>
        </div>

        <div class="row">
            <label for="thumb">Copertina</label>
            <input id="thumb" type="text" name="thumb" value="{{old('src', $comic->thumb)}}">
        </div>

        <div class="row">
            <label for="price">Prezzo</label>
            <input id="price" type="number" name="price" step="0.1" value="{{old('src', $comic->price)}}">
        </div>

        <div class="row">
            <label for="series">Serie</label>
            <input id="series" type="text" name="series" value="{{old('src', $comic->series)}}">
        </div>

        <div class="row">
            <label for="sale_date">Data di vendita</label>
            <input id="sale_date" type="date" name="sale_date" value="{{old('src', $comic->sale_date)}}">
        </div>

        <div class="row">
            <label for="type">Tipo</label>
            <select name="type" id="type">
                <option {{ (old('type', $comic->type) == 'graphic novel') ? 'selected' : '' }} value="graphic novel">Graphic Novel</option>
                <option {{ (old('type', $comic->type) == 'comic book') ? 'selected' : '' }} value="comic book">Comic Book</option>
            </select>
        </div>
    
        <input type="submit">
    </form>

@endsection