@extends('layouts.panel')

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
        <form action="" method="post">
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
            <button type="submit" class="btn btn-primary">
                Guardar
            </button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/js/apointments/create.js') }}"></script>
@endsection
