{{-- formulario de registro de empleado  --}}


@extends('layouts.app')
@section('content')
    <div class="bg-cyan-700 text-white font-bold p-4 flex items-center justify-between">
        <h1 class="text-2xl">Registrar Empleado</h1>
        <a href="{{ url('/layouts') }}" class="bg-blue-400 hover:bg-blue-300 rounded px-4 py-2">Regresar</a>
      </div>
<form action="{{ url('/layouts') }}" method="POST" enctype="multipart/form-data">
@csrf     {{-- identificador como llave de seguridad, para que laravel sepa que se manda desde el mismo sistema--}}
@include('layouts\form')
</form>

@endsection
