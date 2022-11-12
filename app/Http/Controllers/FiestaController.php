<?php

namespace App\Http\Controllers;

use App\Models\Fiesta;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class FiestaController extends Controller
{
    /*
    public function __invoke()
    {
        return view('home');
    }
    */

    public function home(){
        return view('home');
    }
    public function index(){

        $fiestas= Fiesta::orderBy('id','desc')->paginate();

        return view('fiestas.index',compact('fiestas'));
    }
    public function create(){
        return view('fiestas.create');
    }
    public function show(Fiesta $fiesta){

        return view('fiestas.show', compact('fiesta'));
    }

    public function store(Request $request) {

        $request->validate([
            'name'=>'required|max:20',
            'descripcion'=>'required|min:20',
            'invitados'=>'required',
            'categoria'=>'required',
        ]);


        $fiesta= new Fiesta();

        $fiesta->name=$request->name;
        $fiesta->descripcion=$request->descripcion;
        $fiesta->invitados=$request->invitados;
        $fiesta->categoria=$request->categoria;

        $fiesta->save();

        return redirect()->route('fiesta.show',$fiesta->id);

    }

    public function edit(Fiesta $fiesta){
        return view('fiestas.edit',compact('fiesta'));
    }

    public function update(Request $request,Fiesta $fiesta){

        $request->validate([
            'name'=>'required',
            'descripcion'=>'required',
            'invitados'=>'required',
            'categoria'=>'required',
        ]);


        $fiesta->name= $request->name;
        $fiesta->descripcion= $request->descripcion;
        $fiesta->invitados= $request->invitados;
        $fiesta->categoria= $request->categoria;

        $fiesta->save();

        return redirect()->route('fiesta.show',$fiesta->id);
    }

    public function destroy(Fiesta $fiesta){
        $fiesta->delete();
        return redirect()->route('fiesta.index');
    }
}
