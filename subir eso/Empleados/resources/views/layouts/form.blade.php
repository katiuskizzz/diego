
 @vite('resources/css/app.css')

    <div class="max-w-md mx-auto p-4 bg-white rounded shadow">
        <h1 class="text-2xl font-semibold mb-4 text-center">Empleado</h1>
        <form action="" method="POST" >
          
            <div class="mb-4">
                <label for="Nombre" class="block text-lg font-semibold text-gray-800">Nombre:</label>
                <input value="{{ isset($empleado->Nombre)?$empleado->Nombre:"" }}" type="text" id="Nombre" name="Nombre" class="border rounded-md px-3 py-2 mt-1 w-full focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="Cedula" class="block text-lg font-semibold text-gray-800">Cédula:</label>
                <input value="{{ isset($empleado->Cedula)?$empleado->Cedula:"" }}" type="number" id="Cedula" name="Cedula" class="border rounded-md px-3 py-2 mt-1 w-full focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="Direccion" class="block text-lg font-semibold text-gray-800">Dirección:</label>
                <input value="{{ isset($empleado->Direccion)?$empleado->Direccion:"" }}" type="text" id="Direccion" name="Direccion" class="border rounded-md px-3 py-2 mt-1 w-full focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="mb-4">
                <label for="Telefono" class="block text-lg font-semibold text-gray-800">Teléfono:</label>
                <input value="{{ isset($empleado->Telefono)?$empleado->Telefono:"" }}" type="number" id="Telefono" name="Telefono" class="border rounded-md px-3 py-2 mt-1 w-full focus:outline-none focus:ring focus:border-blue-300">
            </div>
            <div class="flex justify-center">
               
                    <button type="submit" class="bg-blue-500  text-white px-4 py-2 rounded hover:bg-blue-600">Guardar datos</button>
              
               
            </div>
        </form>
    </div>
