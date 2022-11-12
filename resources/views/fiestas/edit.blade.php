@extends('layouts.plantilla')

@section('title','Fiesta edit')


@section('content')
    <h1 class="text-center prose-slate bg-gradient-to-r from-purple-500 to-pink-500">En esta página podrás editar una fiesta</h1>
    <div class="py-5 h-screen flex flex-col
         items-center">
    <form action="{{route('fiesta.update',$fiesta)}}" method="POST">

        @csrf

        @method('put')
        <div class="py-1">
        <label>
            Nombre:
            <br>
            <input type="text" name='name' class="text-center  w-96" value="{{old('name',$fiesta->name)}}">
        </label>

        @error('name')
            <br>
            <small class="text-center text-red-700">*{{$message}}</small>
            <br>
        @enderror
        </div>
        <br>
        <div class="py-1">
        <label>
            Descripción:
            <br>
            <textarea name="descripcion" class="text-center  w-96" rows="5">{{old('descripcion',$fiesta->descripcion)}}</textarea>
        </label>

        @error('descripcion')
        <br>
        <small class="text-center text-red-700">*{{$message}}</small>
        <br>
    @enderror
        </div>
        <br>
        <div class="py-1">
        <label>
            Invitados:
            <br>
            <input type="number" name="invitados" class="text-center  w-96" value="{{old('invitados',$fiesta->invitados)}}">
        </label>


        @error('invitados')
        <br>
        <small class="text-center text-red-700">*{{$message}}</small>
        <br>
        @enderror
        </div>
        <br>
        <div class="py-1">
        <label>
            Edad (+13 o +18):
            <br>
            <input type="text" name='categoria' class="text-center  w-96" value="{{old('categoria',$fiesta->categoria)}}">
        </label>

        @error('categoria')
            <br>
            <small class="text-center text-red-700">*{{$message}}</small>
            <br>
        @enderror
        </div>
        <br>
        <button class="rounded-tl-lg bg-blue-400 mt-2
        hover:bg-gradient-to-r from-sky-500 to-indigo-500 w-96" type="submit">Actualizar Formulario</button>

    </form>
        <a class=" mt-7 rounded-tl-lg bg-red-700 mt-2
        hover:bg-gradient-to-r from-red-700 to-red-400 w-96 text-center" href="{{route('fiesta.index')}}">Cancelar</a>
    </div>
@endsection

