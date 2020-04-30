@extends('layouts.admin')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">{{ __('Lista de Productos') }}</h3>
            </div>
            <!-- Registrar Nueva Inscripción al Ciss -->
            <div class="col text-right">
                <a href="{{ url('Admininscription/create') }}" class="btn btn-lg btn-success">{{ __('Nuevo Producto') }}</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if (session('notification'))
        <div class="alert alert-default" role="alert">
            {{ session('notification') }}
        </div>
        @endif
    </div>
    <div class="table-responsive">
        <!-- Tabla para lista a los Inscritos al Ciis -->
        <table class="table align-items-center table-flush">
        <thead class="thead-light">
            <tr>
            <th scope="col">{{ __('Nombre') }}</th>
            <th scope="col">{{ __('Descripción') }}</th>            
            <th scope="col">{{ __('Precio') }}</th>        
            <th scope="col">{{ __('Stock') }}</th>               
            <th scope="col">{{ __('Opciones') }}</th>             
            </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <th scope="row">
                    {{ $producto->name_prod }}
                </th>
                <td>
                    {{  \Illuminate\Support\Str::limit($producto->desc_prod, 50) }}
                </td>
                <td>
                    {{ $producto->precio_prod }}
                </td>
                <td>
                    {{ $producto->stock_prod }}
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    </div>
    <!-- Paginación -->
    <div class="card-body">
    {{ $productos->links() }}
    </div>
</div>
@endsection
