@extends('layouts.base')

@section('title', 'Ajout')

@section('css', 'ajout')

@section('content')

<h3>Remplir le formulaire pour ajouter un personnage</h3>

<body>
    
<form action="/addcaracter" method="post">
    @csrf
    <input type="hidden" name="id" value="">
    <div>
        <label for="caracter">Personnage </label>
        <input type="text" id="caracter" name="name">
    </div>

    <div>
        <label for="year">Année </label>
        <input type="numbers" id="year" name="year">
    </div>
    <div>
        <label for="comic_name">Nom de la BD</label>
        <input type="text" id="comic_name" name="comic_name">
        </div>
    </div>
    <div>
        <label for="artist">Artiste/Dessinateur : </label>
        <select name="artist_id">
             @foreach ($artists as $artist)
                 <option value="{{$artist->id}}">{{$artist->name}}</option>
             @endforeach
        </select>
    </div>
    <div class="button">
        <button type="submit">Ajouter</button>
    </div>
</form>

</body>

@endsection