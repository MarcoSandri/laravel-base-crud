@extends('layouts.base')

@section('pageTitle', 'Comics')

@section('content')
    
    <div class="container">

        <h1>Lista dei fumetti</h1>

        <a href="{{route('comic.create')}}" class="button">Aggiungi fumetto</a>


        <table>
            <thead>
                <tr>
                    <th class="title"><h2>Titolo</h2></th>
                    <th class="cover"><h2>Copertina</h2></th>
                    <th><h2>Descrizione</h2></th>
                    <th class="price"><h2>Prezzo</h2></th>
                    <th class="series"><h2>Serie</h2></th>
                    <th class="date"><h2>Data di vendita</h2></th>
                    <th class="type"><h2>Tipo</h2></th>
                    <th class="actions"><h2>Comandi</h2></th>
                </tr>
            </thead>
            <tbody>

                @foreach ($comics as $comic)

                <tr>
                    <td><h3>{{$comic['title']}}</h3></td>
                    <td class="thumb"><img src="{{$comic['thumb']}}" alt="{{$comic['title']}}"></td>
                    <td class="description">{{$comic['description']}}</td>
                    <td>{{$comic['price']}}</td>
                    <td>{{$comic['series']}}</td>
                    <td>{{$comic['sale_date']}}</td>
                    <td>{{$comic['type']}}</td>
                    <td class="buttons">
                        <a href="{{route('comic.show', $comic['id'])}}" class="button">Vai</a>
                        <a href="{{route('comic.edit', $comic['id'])}}" class="button">Modifica</a>

                        <form action="{{route('comic.destroy', $comic['id'])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button">Elimina</button>
                        </form>
                    </td>
                </tr>
                    
                @endforeach

            </tbody>
        </table>

    </div>

@endsection