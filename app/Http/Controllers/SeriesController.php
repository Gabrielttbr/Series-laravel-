<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request){
        $series = Serie::all();

        return view( 'series.index', ['series' => $series]);

    }
    public function show(Request $request){
        $id = $request->get('id');

    }
    public function create(){
       return view('series.create');
    }
    public function store(Request $request){
        $nomeSerie = $request->input('nome');

        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series');



    }
}
