@extends('layouts.plantilla')

@section('title','Fiesta '.$fiesta->name)


@section('content')
    <h1 class="text-center prose-slate bg-gradient-to-r from-purple-500 to-pink-500">Bienvenido a la fiesta: {{$fiesta->name}}</h1>
    <a class="rounded-tl-lg bg-fuchsia-700 mt-2
        hover:bg-gradient-to-r from-fuchsia-700 to-indigo-500 w-96" href="{{route('fiesta.index')}}">Volver a Fiestas</a>
    <a class="rounded-tl-lg bg-blue-600 mt-2
        hover:bg-gradient-to-r from-blue-600 to-green-300 w-96" href="{{route('fiesta.edit', $fiesta)}}">Editar Fiesta</a>
    <br>
    <p><strong>Descripción: </strong>{{$fiesta->descripcion}}</p>

    <p><strong>Edad Mínima: </strong>{{$fiesta->categoria}}</p>

    <p><strong>Invitados: </strong>{{$fiesta->invitados}}</p>
    <form action="{{route('fiesta.destroy',$fiesta)}}" method="post">
        @csrf
        @method('delete')
        <button class="rounded-tl-lg bg-red-800 mt-2
        hover:bg-gradient-to-r from-red-600 to-red-800 w-96" type="submit ">Eliminar</button>
    </form>
@endsection

