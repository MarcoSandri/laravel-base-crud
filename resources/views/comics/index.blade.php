@extends('layouts.base')

@section('pageTitle', 'Comics')

@section('content')
    
    <div class="container">

        <h1>Lista dei fumetti</h1>
        
        <table>
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Copertina</th>
                    <th>Descrizione</th>
                    <th>Prezzo</th>
                    <th>Serie</th>
                    <th>Data di vendita</th>
                    <th>Tipo</th>
                    <th>Comandi</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($comics as $comic)

                <tr>
                    <td>{{$comic['title']}}</td>
                    <td><img src="{{$comic['thumb']}}" alt="{{$comic['title']}}"></td>
                    <td>{{$comic['description']}}</td>
                    <td>{{$comic['price']}}</td>
                    <td>{{$comic['series']}}</td>
                    <td>{{$comic['sale_date']}}</td>
                    <td>{{$comic['type']}}</td>
                    <td>
                        <a href="{{route('comic.show', $comic['id'])}}">Vai</a>
                    </td>
                </tr>
                    
                @endforeach

            </tbody>
        </table>

    </div>

@endsection