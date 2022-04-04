@extends('layouts.base')

@section('pageTitle', 'Aggiungi fumetto')

@section('content')

    <h1>Aggiungi fumetto</h1>

    <form method="POST" action="{{route('comic.store')}}">
    
        @csrf

        <div class="row">
            <label for="title">Titolo</label>
            <input id="title" type="text" name="title">
        </div>

        <div class="row">
            <label for="description">Descrizione</label>
            <textarea id="description" name="description">

            </textarea>
        </div>

        <div class="row">
            <label for="thumb">Copertina</label>
            <input id="thumb" type="text" name="thumb">
        </div>

        <div class="row">
            <label for="price">Prezzo</label>
            <input id="price" type="number" name="price" step="0.1">
        </div>

        <div class="row">
            <label for="series">Serie</label>
            <input id="series" type="text" name="series">
        </div>

        <div class="row">
            <label for="sale_date">Data di vendita</label>
            <input id="sale_date" type="date" name="sale_date">
        </div>

        <div class="row">
            <label for="type">Tipo</label>
            <select name="type" id="type">
                <option value="graphic novel">Graphic Novel</option>
                <option value="comic book">Comic Book</option>
            </select>
        </div>
    
        <input type="submit">
    </form>

@endsection