<?php

namespace App\Http\Controllers;
use App\DeliaPasteles;
use Illuminate\Http\Request;

class DeliaPastelesController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return
     */

     public function index(){
        $deliapasteles = DeliaPasteles::all();
        return view('deliapasteles.index',compact('deliapasteles'));
    }

    public function show($id){
        $deliapasteles = DeliaPasteles::find($id);
        return view('deliapasteles.show',compact('deliapasteles'));
    }

    public function crear(){
        return view('deliapasteles.crear');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'titulo' => 'required',
            'ingredientes' => 'required',
            'preparacion' => 'required'
        ]);

        $deliapastel = new DeliaPasteles;
        $deliapastel->titulo = $request->titulo;
        $deliapastel->ingredientes = $request->ingredientes;
        $deliapastel->preparacion = $request->preparacion;

        $deliapastel->save();

        return redirect('/deliapasteles');
    }
}

