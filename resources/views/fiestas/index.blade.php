@extends('layouts.plantilla')

@section('title','Fiesta')


@section('content')
    <h1 class="text-center prose-slate bg-gradient-to-r from-purple-500 to-pink-500">Bienvenido a la FIESTAAAAA</h1>
    <a class="hover:text-green-300" href="{{route('fiesta.create')}}">Crear Fiesta</a>
    <ul>
        @foreach ($fiestas as $fiesta)
            <li><a class="hover:text-blue-800" href="{{route('fiesta.show',$fiesta->id)}}">{{$fiesta->name}}</a></li>
        @endforeach
    </ul>
    <a class="">{{$fiestas->links()}}</a>
@endsection


