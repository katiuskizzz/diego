
 @vite('resources/css/app.css')
 @extends('layouts.app')
 @section('content')
<div class="bg-cyan-700 text-white font-bold p-4 flex items-center justify-between ">
    <h1 class="text-2xl">Tabla de empleados</h1>
    <a href="{{ url('/layouts/create') }}" class="bg-green-500 hover:bg-green-600 rounded px-4 py-2">Crear</a>
  </div>

    <table class="table-auto w-full mx-auto border border-gray-300">
        <thead class="bg-gray-500 text-white font-bold">
          <tr>
            <th class="border border-gray-300 p-2">#</th>
            <th class="border border-gray-300 p-2">Nombre</th>
            <th class="border border-gray-300 p-2">Teléfono</th>
            <th class="border border-gray-300 p-2">Dirección</th>
            <th class="border border-gray-300 p-2">Cédula</th>
            <th class="border border-gray-300 p-2">Acciones</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-300">
          @foreach ($empleados as $Empleado)
          <tr class="hover:bg-blue-100">
            <td class="border border-gray-300 p-2">{{ $Empleado->id }}</td>
            <td class="border border-gray-300 p-2">{{ $Empleado->Nombre }}</td>
            <td class="border border-gray-300 p-2">{{ $Empleado->Telefono }}</td>
            <td class="border border-gray-300 p-2">{{ $Empleado->Direccion }}</td>
            <td class="border border-gray-300 p-2">{{ $Empleado->Cedula }}</td>
            <td class="p-2 flex justify-around">
              <a href="{{  url('/layouts/'.$Empleado->id.'/edit') }}">
                <button class="bg-gray-800 text-white rounded px-2 py-1c  hover:bg-blue-500">Editar</button>
              </a>
              <form action="{{ url('/layouts/'.$Empleado->id)  }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <button class="bg-blue-500 text-white rounded px-2 py-1 hover:bg-red-700" onclick="return confirm('estas seguro que quieres eliminar este Empleado?')">Eliminar </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

      @endsection
