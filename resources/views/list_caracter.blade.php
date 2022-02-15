@extends('layouts.base')

@section('title', 'list_caracter')

@section('css', 'liste')

@section('content')


<h2>Les personnages de BD</h2>


<body>
    <section class="image" >
    <table>
        <tr>
          <th>Nom du personnage</th>
          <th>Année de création</th>
          <th>Nom de la BD</th>
          <th>Dessinateur</th>
          <th>Supprimer</th>
          <th>Modifier</th>
        </tr>
        @foreach ($caracters as $caracter)
        <tr>
          <td>{{$caracter->name}}</td>
          <td>{{$caracter->year}}</td>
          <td>{{$caracter->comic_name}}</td>
          <td>{{$caracter->artist->name}}</td>           
          <td>
            <form action="/delete" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{$caracter->id}}">
              <button type="submit"><i class="fas fa-user-times"></i></i></button>
            </form>
          </td>
          <td>
            <form action="/update" method="get">
                @csrf
                <input type="hidden" name="id" value="{{$caracter->id}}">
                <button type="submit"><i class="fas fa-user-edit"></i></button>
            </form> 
          </td>
        </tr>  
          @endforeach

      </table>
    </section>
</body>



@endsection