<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Caracter;
use App\Models\Artist;

class NavController extends Controller
{
    public function accueil()
    {
        return view('accueil');
    }

    public function list_caracter()
    {
        $caracters = Caracter::all(); //Demande au model Caracter de récupérer le caracter dans la BDD

        //dd($caracters);
        return view('list_caracter', ['caracters' => $caracters]);
    }

    public function ajout()
    {
        $artists = Artist::all();
        return view('ajout',['artists' => $artists,]);
    }
    
    public function update(Request $request)
    {
     $caracter = Caracter::findOrFail($request->id);
     //@dd($caracters);
    $caracter->save();
    $artists = Artist::all()->sortBy('name');
    return view('modif',['caracter' => $caracter, 'artists' => $artists]);
    }
}