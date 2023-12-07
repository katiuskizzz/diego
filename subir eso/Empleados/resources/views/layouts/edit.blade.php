{{-- formulario para editar los datos del empleado  --}}

@extends('layouts.app')

@section('content')

@vite('resources/css/app.css')
<div class="bg-cyan-700 text-white font-bold p-4 flex items-center justify-between">
    <h1 class="text-2xl">Editar Empleado</h1>
    <a href="{{ url('/layouts') }}" class="bg-blue-400 hover:bg-blue-300 rounded px-4 py-2">Regresar</a>
  </div>
    </form>

<form action="{{ url('/layouts/'.$empleado->id) }}" method="POST" enctype="multipart/form-data">
    @csrf     {{-- identificador como llave de seguridad --}}
    {{ method_field('PATCH') }}
    @include('layouts\form')

@endsection
