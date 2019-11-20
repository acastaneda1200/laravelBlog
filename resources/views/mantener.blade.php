@extends('header')
@section("contenido")


    <div class="col-md-12">
    

            @component('tpl.portlet01')
            @slot('titulo_form')
                Formulario Mantenimiento de Autos
            @endslot
        
            @slot('botones')
            <a href="#" class="btn btn-success">
                    Guardar
                </a>
            @endslot

            @slot('contenido')
            <div class="col-md-6">
                <form action="">
            <div class="form-group m-form__group">
                    <label for="exampleInputEmail1">
                        Descripcion
                    </label>
                    <input type="text" class="form-control m-input" id="" placeholder="Descripcion">
                
                </div>

                <div class="form-group ">
                    <label for="exampleInputEmail1">
                        Imagen del Auto
                    </label>
                    <div></div>
                    <label class="custom-file">
                        <input type="file" id="file2" class="custom-file-input">
                        <span class="custom-file-control"></span>
                    </label>
                </div>
                <button type="button" class="btn btn-primary">
                    Guardar
                </button>
                    </form>
            </div> {{-- div del col --}}
            @endslot

        @endcomponent

     
    </div>


@endsection


    
