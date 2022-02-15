<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caracter;

class ActionController extends Controller
{
    public function ajout(Request $request)
    {
        $caracter = new Caracter; //Instancie le Model Caracter.php

        $caracter->name = $request->name;// $caracter->name: Récupère  le name dans la BDD et $request->name : met le titre dans la variable $request
        $caracter->year = $request->year;
        $caracter->comic_name = $request->comic_name;
        $caracter->artist_id = $request->artist_id;
        $caracter->save();
        
        return redirect('/list_caracter');

       // @dd($caracter);
    }

    public function delete(Request $request)
    { 
        $caracter = Caracter::findOrFail($request->id);
        $caracter->delete();
        return redirect('/list_caracter');
    }

    public function modification(Request $request)
    {
        $caracter = Caracter::findOrFail($request->id);

        $caracter->name = $request->name;// $caracter->name: Récupère  le name dans la BDD et $request->name : met le titre dans la variable $request
        //@dd($request);
        $caracter->year = $request->year;
        $caracter->comic_name = $request->comic_name;
        $caracter->artist_id = $request->artist_id;
        $caracter->save();
        
        return redirect('/list_caracter');
    }

}