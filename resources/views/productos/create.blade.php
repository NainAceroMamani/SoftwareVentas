@extends('layouts.panel')

@section('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
@endsection

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
        <div class="col">
            <h3 class="mb-0">Puesto: {{ $puesto->code }}</h3>
        </div>
        <div class="col text-right">
            <a href="{{ url('productos') }}" class="btn btn-sm btn-default">
                Cancelar y volver
            </a>
        </div>
        </div>
    </div>
    <div class="card-body">
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </div>
    @endif

    @if (session('notification'))
        <div class="alert alert-default" role="alert">
            {{ session('notification') }} 
            {{ session('producto') }}
        </div>
    @endif

    @php
        $number = 0;
    @endphp

        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                @if(session('notification'))
                    @php
                        $number = intval(preg_replace('/[^0-9]+/', '', session('notification')), 10); 
                    @endphp
                    <form id="dropzoneFrom" method="post" action="{{ url('productos/dropzoneFrom')}}" 
                        class="dropzone" accept-charset="UTF-8" enctype="multipart/form-data">
                        <input type="hidden" name="puesto" value="{{ $puesto->id }}">
                        <input type="hidden" name="producto" value="{{ $number }}">   
                        @csrf
                    </form>
                @else
                    <div class="card-body">
                        <div class="alert alert-danger" role="alert">
                            Registre Primero el Producto
                        </div>
                    </div>
                @endif
                </div>
            </div>
        </div>
        <form action="{{ url('productos')}}" method="POST">
        @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name_prod">Nombre *</label>
                    <input name="name_prod" id="name_prod" type="text" 
                    class="form-control" placeholder="Nombre del Producto" 
                    value="{{ old('name_prod') }}" required>
                </div>
                <div class="form-group col-md-6">    
                    <label for="precio_prod">Precio *</label>
                    <input name="precio_prod" id="precio_prod" type="number" 
                    class="form-control" placeholder="Precio del Producto" 
                    value="{{ old('precio_prod') }}" required>
                </div>
            </div>
            <div class="form-group">
                <label for="desc_prod">Descripción *</label>
                <textarea class="form-control form-control-alternative" name="desc_prod" id="desc_prod" rows="5" placeholder="Descripción del producto">{{ old('desc_prod') }}</textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">    
                    <label for="stock_prod">Stock *</label>
                    <input name="stock_prod" id="stock_prod" type="number" 
                    class="form-control" placeholder="Stock del Producto" 
                    value="{{ old('stock_prod') }}" required>
                </div>
                <div class="form-group col-md-6">    
                    <label for="subcategoria_id">Subcategorias *</label>
                    <select name="subcategoria_id[]" id="subcategoria_id" class="form-control selectpicker"
                    data-style="btn-default" multiple title="Seleccione una o varias" required>
                    @foreach($subcategorias as $subcategoria)
                        <option value="{{ $subcategoria->id }}">{{ $subcategoria->name }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <input type="hidden" name="puesto_id" value="{{ $puesto->id }}">
            <button type="submit" class="btn btn-primary">
                Guardar
            </button>
            <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bd-example-modal-lg">
                Subir Imagen de Producto
            </button>
        </form>
        <hr>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>

    <script>
        Dropzone.options.dropzoneFrom = { 
        // Change following configuration below as you need there bro
        autoProcessQueue: true,
        uploadMultiple: true,
        parallelUploads: 2,
        maxFiles: 10,
        maxFilesize: 5,
        addRemoveLinks: true,
        dictRemoveFile: "Eliminar",
        dictDefaultMessage: "<h3 class='sbold'>Suba las fotos del producto<h3>",
        acceptedFiles: 'image/*',
        //another of your configurations..and so on...and so on...
        init: function() {
            this.on("removedfile", function(file) {
                console.log(file.name);
                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ url('/productos/dropzonedelete') }}",
                    data: {
                        "_token": $("meta[name='csrf-token']").attr("content"),
                        "name": file.name,
                        "producto": "<?php echo $number; ?>",
                        "puesto": "<?php echo $puesto->id; ?>"
                    },
                    dataType: "json",
                    method: "POST",
                    success: function(response) {
                        //Acciones si success
                    },
                    error: function () {
                        //Acciones si error
                    }
                });
            });
        }}
    </script>
@endsection
