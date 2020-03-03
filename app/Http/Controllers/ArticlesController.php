<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return
     */

    public function __construct(){
        $this->middleware('auth');

    }

    public function index(){
        $articulos = Article::all();
        return view('articulos.index',compact('articulos'));
    }

    public function show($id){
        $articulo = Article::find($id);
        return view('articulos.show',compact('articulo'));
    }

    public function crear(){
        return view('articulos.crear');
    }

    public function store(Request $request){
        // $data = request()->all();
        // Article::create([
        //     'titulo' => $data ['titulo'],
        //     'cuerpo' => $data ['cuerpo'],
        //     'autor' => $data ['autor']
        // ]);

        $validateData = $request->validate([
            'titulo' => 'required|unique:articles|max:12|min:6',
            'cuerpo' => 'required',
            'autor' => 'required'
        ],[
            'titulo.required' => "El titulo esta vacio",
            'titulo.unique' => "El titulo ya existe",
            'titulo.min' => "Debe tener mas de 6 letras",
            'titulo.max' => "Debe tener menos de 12 letras",
            'cuerpo.required' => "El cuerpo esta vacio",
            'autor.required' => "El autor esta vacio"

        ]);



        $articulo = new Article;
        $articulo->titulo = $request->titulo;
        $articulo->cuerpo = $request->cuerpo;
        $articulo->autor = $request->autor;

        $articulo->save();

        //Article::create($request->all());

        //return redirect()->route('todos_los_articulos');
        return redirect('/articulos');
    }

    public function edit($id){
        $articulo = Article::find($id);
        return view('articulos.edit',['articulo'=>$articulo]);
    }

    public function store_edit(Request $request, $id){
        $validateData = $request->validate([
            'titulo' => 'required|unique:articles|max:12|min:6',
            'cuerpo' => 'required',
            'autor' => 'required'
        ]);

        $articulo = Article::find($id);
        $articulo->titulo = $request->titulo;
        $articulo->cuerpo = $request->cuerpo;
        $articulo->autor = $request->autor;

        $articulo->save();

        return redirect('/articulos');

    }

    public function delete($id){
        $articulo = Article::find($id);
        $articulo->delete();
        return redirect('/articulos');
    }
}
