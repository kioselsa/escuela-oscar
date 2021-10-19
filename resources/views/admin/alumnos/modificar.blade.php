<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Escuela Oscar/Alumnos/Modificar') }}
        </h2>
    </x-slot>

    <input type="hidden" readonly value="{{ $alumno->carrera }}" id="carr">

    <div class="py-12">
       <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <form action="{{ route('alumnos_modificar_guardar',$alumno->id) }}" method="get">
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nombre</span>
                        </div>
                        <input type="text" class="form-control" name="nombre" value="{{ $alumno->nombre }}">
                    </div>
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Edad</span>
                        </div>
                        <input type="number" min="0" max="120" class="form-control" name="edad" value="{{ $alumno->edad }}">
                    </div>
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Dirección</span>
                        </div>
                        <input type="text"  class="form-control" name="direccion" value="{{ $alumno->direccion }}">
                    </div>
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Teléfono</span>
                        </div>
                        <input type="tel"  class="form-control" name="telefono" value="{{ $alumno->telefono }}">
                    </div>
                    <div class="input-group mb-3 input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Carrera</span>
                        </div>
                        <select class="form-control" id="carrera" name="carrera">
                            <option value="">Selecciona una carrera</option>
                            <option value="sistemas">Sistemas</option>
                            <option value="tics">TICS</option>                            
                        </select>
                    </div>
                    <input type="submit" value="Guardar" class="btn btn-success btn-sm ">                   
                </form>
            </div>
            <div class="col-sm-4"></div>
       </div>
    </div>

    @section('js')
        <script>
            document.ready = document.getElementById("carrera").value = $('#carr').val();
        </script>
    @endsection
</x-app-layout>

