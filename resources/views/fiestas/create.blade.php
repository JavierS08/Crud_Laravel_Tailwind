@extends('layouts.plantilla')

@section('title','Fiesta Create')


@section('content')

    <h1 class="text-center prose-slate bg-gradient-to-r from-purple-500 to-pink-500">En esta página podrás crear una fiesta</h1>
    <div class="py-5 h-screen flex flex-col
         items-center">
    <form action="{{route('fiesta.store')}}" method="POST">

        @csrf
    <div class="py-1">
        <label>
            Nombre:
            <br>
            <input type="text" name='name' value="{{old('name')}}" class="text-center  w-96">
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
            <textarea name="descripcion" class="w-96" rows="5">{{old('descripcion')}} </textarea>
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
            <input type="number" name="invitados" value="{{old('invitados')}}" min="0" class="text-center w-96">
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
            <input type="text" name='categoria' value="{{old('categoria')}}" class="text-center w-96">
        </label>

        @error('categoria')
            <br>
            <small class="text-red-700">*{{$message}}</small>
            <br>
        @enderror
        </div>
        <br>
        <button type="submit" class="rounded-tl-lg bg-blue-400 mt-2
        hover:bg-gradient-to-r from-sky-500 to-indigo-500 w-96">Enviar Formulario</button>

    </form>
        <a class=" mt-7 rounded-tl-lg bg-red-700 mt-2
        hover:bg-gradient-to-r from-red-700 to-red-400 w-96 text-center" href="{{route('fiesta.index')}}">Cancelar</a>
    </div>

@endsection

