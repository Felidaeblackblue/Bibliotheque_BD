@extends('layouts.base')

@section('title', 'Modif')

@section('css', 'ajout')

@section('content')

<h3>Modifier</h3>

<body>
    
<form action="/modif/{{$caracter->id}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$caracter->id}}">
    <div>
        <label for="caracter">Personnage </label>
        <input type="text" id="caracter" name="name" value="{{$caracter->name}}">
    </div>

    <div>
        <label for="year">Année </label>
        <input type="numbers" id="year" name="year" value="{{$caracter->year}}">
    </div>
    <div>
        <label for="comic_name">Nom de la BD</label>
        <input type="text" id="comic_name" name="comic_name" value="{{$caracter->comic_name}}">
        </div>
    </div>
    <div>
        <label for="artist">Artiste/Dessinateur : </label>
        <select name="artist_id">
             @foreach ($artists as $artist)
                @if ($caracter->artist->id == $artist->id)
                    <option value="{{$artist->id}}" selected>{{$artist->name}}</option>
                @else
                    <option value="{{ $artist->id }}">{{ $artist->name }}</option> 
                @endif
             @endforeach
        </select>
    </div>
    <div class="button">
        <button type="submit">Modifier</button>
    </div>
</form>

</body>

@endsection