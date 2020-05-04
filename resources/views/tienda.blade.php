@extends('layouts.app')

@section('content')
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand text-bold text-lg" href="#">{{ _('FERIA TACNA') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr>
                <input class="form-control mr-sm-2" type="search" placeholder="Encuentra tu producto" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" style="width:200px;font-size:16px" type="submit">{{ _('Solicitar Puesto') }}</button>
            </div>
        </div>
    </nav>
    <!-- END HEADER -->

    <!-- SUBMENU -->
    <div class="mt-0.5 navbar-dark bg-secondary text-light bg-dark">
        <ul class="nav nav-pills mb-3 justify-content-center">
            <li class="nav-item mb-2">  <a class="nav-link active active white">{{ _('Inicio') }} </a></li>
            <li class="nav-item mb-2">  <a class="nav-link white">{{ _('Vender') }} </a></li>
            <li class="nav-item mb-2">  <a class="nav-link white">{{ _('Recomendados') }} </a></li>
            <li class="nav-item mb-2">  <a class="nav-link white">{{ _('Anunciar Aquí') }} </a></li>
            <li class="nav-item mb-2">  <a class="nav-link white">{{ _('Ayuda') }} </a></li>
            <li class="nav-item mb-2">  <a class="nav-link white">{{ _('Contáctanos') }} </a></li>
        </ul>
    </div>
    <!-- END SUBMENU -->

    <div class="container-fluid">
    <div class="row">
    <!-- MENU LATERAL -->
    <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="accordion" id="accordionExample">
        @php    $bandera = true;    @endphp
        @foreach($categorias as $categoria)
            <div class="card">
            @if($bandera == true)
                <div class="card-header bg-dark" id="heading{{$categoria->id}}">
            @else
                <div class="card-header" id="heading{{$categoria->id}}">
            @endif
            <h2 class="mb-0">
            @if($bandera == true)
                <button class="btn btn-link white" style="font-size:15px" type="button" data-toggle="collapse" data-target="#collapse{{$categoria->id}}" aria-expanded="true" aria-controls="collapse{{$categoria->id}}">
                    {{ $categoria->name }}
                </button>
            @else
                <button class="btn btn-link blank" style="font-size:15px" type="button" data-toggle="collapse" data-target="#collapse{{$categoria->id}}" aria-expanded="true" aria-controls="collapse{{$categoria->id}}">
                    {{ $categoria->name }}
                </button>
            @endif
            </h2>
            </div>
            @if($bandera == true)
                <div id="collapse{{$categoria->id}}" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            @else
                <div id="collapse{{$categoria->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            @endif
                <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="container-fluid">
                            <input type="checkbox" style="width:20px;height:20px;" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label ml-2" for="exampleCheck1">Check me out</label>
                        </div>
                    </li>
                </ul>  
                </div>
            </div>
            @php    $bandera = false;   @endphp
            </div>
        @endforeach
        </div>
    </div>
    <!-- END MENU LATERAL -->
    </div>
    </div>

    @endsection

@section('scripts')
<script src="{{ asset('/js/component/panel.min.js') }}"></script>
@endsection